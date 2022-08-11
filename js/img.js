$("#btn").click(function(){
      var formData = new FormData();
      var upfiles = $("#fileControl").get(0).files;
      formData.append("file", upfiles[0]);
      axios({
        // 请求类型
        method: "POST",
         url: "https://book.xggm.top/api.php", //XG图床API
         headers:{'Content-Type':'multipart/form-data'},
         data:formData
        }).then((response) => {
        document.getElementById('comment-content').value=document.getElementById('comment-content').value+'!['+response.data.name+']'+'('+response.data.viewurl+')';
      });
});
$("#btn1").click(function(){
      var formData = new FormData();
      var upfiles = $("#fileControl1").get(0).files;
      formData.append("file", upfiles[0]);
      axios({
        // 请求类型
        method: "POST",
         url: "https://book.xggm.top/api.php", //XG图床API
         headers:{'Content-Type':'multipart/form-data'},
         data:formData
        }).then((response) => {
        document.getElementById('j-dynamic-form-text').value=document.getElementById('j-dynamic-form-text').value+'!['+response.data.name+']'+'('+response.data.viewurl+')';
      });
});
$(function() {
    　　//显示隐藏的文件名并上传状态切换
    　　$('.showFileName').hide();
    　　$('#btn').hide();
    　　$('#btn1').hide();
    　　$("#upload").on("change", "input[type='file']", function() {
    　　var filePath = $(this).val();
    　　if(filePath.indexOf("jpg") != -1 || filePath.indexOf("png") != -1 || filePath.indexOf("gif") != -1 || filePath.indexOf("jpeg") != -1 || filePath.indexOf("ico") != -1 || filePath.indexOf("webp") != -1 || filePath.indexOf("bmp") != -1 || filePath.indexOf("tif") != -1 || filePath.indexOf("tiff") != -1) {
    // 　　if(filePath) {
    　　　　$(".fileerrorTip").html("").hide();
    　　　　var arr = filePath.split('\\');
    　　　　var fileName = arr[arr.length - 1];
    　　　　$('.showFileName').show();
    　　　　$('#btn').show();
    　　　　$('#btn1').show();
    　　　　$(".showFileName").html("已选择文件名：" + fileName);
    　　} else {
    　　      $('.showFileName').show();
            $(".showFileName").html("请选择图片文件！");
    　　　　$('#btn').hide();
    　　　　$('#btn1').hide();
    　　　　return false
    　　}
        });
});