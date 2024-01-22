// 1. what is API
// 2. How do I call API
// 3. Explain code
const host = "https://provinces.open-api.vn/api/";
var callAPI = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "province");
        });
}
callAPI('https://provinces.open-api.vn/api/?depth=1');
var callApiDistrict = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
        });
}
var callApiWard = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
        });
}

var renderData = (array, select) => {
    // Kiểm tra xem phần tử chọn có tồn tại không
    var selectElement = document.querySelector("#" + select);
    if (!selectElement) {
        console.error('Select element not found:', select);
        return;
    }

    // Thiết lập giá trị mặc định cho phần tử chọn
    selectElement.innerHTML = '<option disabled value="">Chọn</option>';

    // Kiểm tra và xử lý mảng
    if (Array.isArray(array)) {
        array.forEach(element => {
            // Kiểm tra xem đối tượng có thuộc tính code và name không
            if (element && element.code !== undefined && element.name !== undefined) {
                // Đảm bảo giá trị là chuỗi trước khi sử dụng
                var code = String(element.code);
                var name = String(element.name);

                // Thêm option vào phần tử chọn
                selectElement.innerHTML += `<option value="${code}">${name}</option>`;
            }
        });
    } else {
        console.error('Invalid data array:', array);
    }
}

$("#province").on("change", function() {
    callApiDistrict(host + "p/" + $(this).val() + "?depth=2");

});

$("#district").on("change", function() {
    callApiWard(host + "d/" + $(this).val() + "?depth=2");

});

$("#ward").on("change", function() {

});