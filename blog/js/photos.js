var doc = document,
  photo = doc.querySelectorAll(".photo"),
  pos = doc.querySelectorAll(".pho"),
  closeBox = doc.querySelector("#close"),
  showBox = doc.querySelector("#box"),
  showPhoto = doc.querySelector("#showPhoto"),
  bigPos = doc.querySelector("#bigpos"),
  previous = doc.querySelector(".previous"),
  next = doc.querySelector(".next");


for (var i = photo.length - 1; i >= 0; i--) {
  photo[i].addEventListener("click",function () {
    showBox.style.display = "block";
    var imgSrc = this.src;
    showPhoto.src = imgSrc;
});
};//弹出蒙板

closeBox.addEventListener("click",function () {
  showBox.style.display = "none";
});//关闭蒙板

//上一页

//点击小图
for (var i = pos.length - 1; i >= 0; i--) {
  pos[i].addEventListener("click",function () {
    var imgSrc = this.src;
    showPhoto.src = imgSrc;
  })
};
