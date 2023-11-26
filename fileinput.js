function displayFileName(labelId, inputId) {
    // Lấy tên của file được chọn
    var fileName = document.getElementById(inputId).files[0].name;

    // Cập nhật nội dung của label để hiển thị tên file
    var browseButton = document.getElementById(labelId);
    browseButton.innerText = fileName;

    // Tạo một input file mới
    var newInput = document.createElement('input');
    newInput.type = 'file';
    newInput.name = inputId;
    newInput.id = inputId;
    newInput.hidden = true;
    newInput.onchange = function() { displayFileName(labelId, inputId); };

    // Thêm input mới vào cùng với input cũ
    var parentElement = document.getElementById(labelId);
    parentElement.appendChild(newInput);
}