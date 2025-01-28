$(document).ready(function() {
    console.log('Document ready!');
    
    $('#upload').on('change', function() {
        console.log('File selected!');
        const form = new FormData();
        form.append('file', $(this)[0].files[0]);
        form.append('_token', $('meta[name="csrf-token"]').attr('content'));

        console.log('Uploading file...');

        $.ajax({
            processData: false,
            contentType: false,
            type: 'POST',
            dataType: 'JSON',
            data: form,
            url: '/admin/upload/services',
            success: function(results) {
                console.log('Upload response:', results);
                if (results.error === false) {
                    $('#image_show').html('<a href="' + results.url + '" target="_blank">' +
                        '<img src="' + results.url + '" width="100px"></a>');
                    $('#thumb').val(results.url);
                } else {
                    alert('Upload File Lỗi');
                }
            },
            error: function(xhr, status, error) {
                console.log('Upload error:', error);
                alert('Upload File Lỗi');
            }
        });
    });
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Phương thức Xóa danh mục
function removeRow(id, url) {
    // Hiển thị hộp thoại xác nhận trước khi xóa
    if (confirm('Bạn có chắc muốn xóa?')) {
        // Thực hiện AJAX request nếu người dùng nhấn OK
        $.ajax({
            // Cấu hình request
            type: 'DELETE',      // Phương thức HTTP DELETE
            dataType: 'JSON',    // Kiểu dữ liệu trả về mong muốn là JSON
            
            // Dữ liệu gửi lên server
            data: { 
                id: id,          // ID của item cần xóa
                _token: $('meta[name="csrf-token"]').attr('content')  // Token bảo mật của Laravel
            },
            
            url: url,           // URL endpoint xử lý xóa (ví dụ: /admin/menus/destroy)

            // Callback khi request thành công
            success: function(result) {
                if (result.error === false) {  // Nếu server trả về error = false (xóa thành công)
                    alert(result.message);      // Hiện thông báo thành công
                    location.reload();          // Tải lại trang để cập nhật danh sách
                    return;                     // Dừng thực thi function
                } 
                // Nếu có lỗi từ server (error = true)
                alert(result.message);          // Hiện thông báo lỗi từ server
            },

            // Callback khi request thất bại (lỗi mạng, server 500, etc)
            error: function(xhr, status, error) {
                // Log lỗi chi tiết vào console để debug
                console.log('Server Response:', xhr.responseText);
                // Hiện thông báo lỗi cho người dùng
                alert('Có lỗi xảy ra, vui lòng thử lại sau!');
            }
        });
    }
}