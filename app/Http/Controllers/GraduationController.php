<?php

namespace App\Http\Controllers;

use App\Http\Requests\GraduationRequest;
use App\Models\Graduation;
use App\Repositories\Graduation\GraduationRepository;
use App\Repositories\RegistrationSchedule\RegistrationScheduleRepository;
use Carbon\Carbon;

class GraduationController extends Controller
{
    private GraduationRepository $graduationRepository;
    private RegistrationScheduleRepository $registrationScheduleRepository;

    public function __construct(GraduationRepository $graduationRepository, RegistrationScheduleRepository $registrationScheduleRepository)
    {
        $this->graduationRepository = $graduationRepository;
        $this->registrationScheduleRepository = $registrationScheduleRepository;
    }

    public function index()
    {
        $graduations = $this->graduationRepository->getGraduations();

        return view('graduations.index', compact('graduations'));
    }

    public function store(GraduationRequest $request)
    {
        $registrationScheduleData = [
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ];
        $registrationSchedule = $this->registrationScheduleRepository->storeRegistrationSchedule($registrationScheduleData);

        $graduationData = [
            'name' => $request['name'],
            'batch' => $request['batch'],
            'session' => $request['session'],
            'type' => $request['type'],
            'schedule' => $request['schedule'],
            'quota' => $request['quota'],
            'graduation_registration_schedule_id' => $registrationSchedule->id,
        ];
        $this->graduationRepository->storeGraduation($graduationData);

        return back();
    }

    public function show(Graduation $graduation)
    {
        return $graduation;
    }

    public function update(GraduationRequest $request, Graduation $graduation)
    {
        $graduation->update($request->validated());

        return $graduation;
    }

    public function destroy(Graduation $graduation)
    {
        $graduation->delete();

        return response()->json();
    }
}
