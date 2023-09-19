import $ from "jquery";

$(document).ready(function () {
    $('#add-new-partner').click(function () {
        const provinceSelect = $('#province'); // get element select for province

        fetch(`https://farid-maulana.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(data => {
                // add province data to option select
                data.forEach(province => {
                    provinceSelect.append(new Option(province.name, province.id))
                })
            });
    })

    $('#province').change(function () {
        const provinceId = $(this).val(); // get selected province id

        const regencySelect = $('#regency');
        regencySelect.prop('disabled', false);
        regencySelect.empty(); // reset option

        regencySelect.append("<option selected disabled>-- Pilih Kota/Kabupaten --</option>");

        fetch(`https://farid-maulana.github.io/api-wilayah-indonesia/api/regencies/${provinceId}.json`)
            .then(response => response.json())
            .then(data => {
                // add regency data to option select
                data.forEach(regency => {
                    let option = new Option(regency.name, regency.id)
                    regencySelect.append(option)
                })
            });
    })

    $('#regency').change(function () {
        const regencyId = $(this).val(); // get selected province id

        const districtSelect = $('#district');
        districtSelect.prop('disabled', false);
        districtSelect.empty(); // reset option

        districtSelect.append("<option selected disabled>-- Pilih Kecamatan --</option>");

        fetch(`https://farid-maulana.github.io/api-wilayah-indonesia/api/districts/${regencyId}.json`)
            .then(response => response.json())
            .then(data => {
                // add regency data to option select
                data.forEach(district => {
                    let option = new Option(district.name, district.id)
                    districtSelect.append(option)
                })
            });
    })

    $('#district').change(function () {
        const districtId = $(this).val(); // get selected province id

        const villageSelect = $('#village');
        villageSelect.prop('disabled', false);
        villageSelect.empty(); // reset option

        villageSelect.append("<option selected disabled>-- Pilih Kelurahan --</option>");

        fetch(`https://farid-maulana.github.io/api-wilayah-indonesia/api/villages/${districtId}.json`)
            .then(response => response.json())
            .then(data => {
                // add regency data to option select
                data.forEach(village => {
                    let option = new Option(village.name, village.id)
                    villageSelect.append(option)
                })
            });
    })

    $('.edit-partner').click(function () {
        const partnerId = $(this).data('id');
        const provinceSelect = $(`#edit-province-${partnerId}`); // get element select for province
        const selectedProvince = provinceSelect.data('selected');
        console.log(provinceSelect)

        fetch(`https://farid-maulana.github.io/api-wilayah-indonesia/api/provinces.json`)
            .then(response => response.json())
            .then(data => {
                // add province data to option select
                data.forEach(province => {
                    if (province.id === selectedProvince) {
                        provinceSelect.append(new Option(province.name, province.id, false, true))
                    }
                    provinceSelect.append(new Option(province.name, province.id))
                })
            });
    })
})
