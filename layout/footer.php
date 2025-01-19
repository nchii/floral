</main>

<footer id="footer" class="footer light-background">
  <div class="container">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
        <div class="widget">
          <h3 class="widget-heading">About Us</h3>
          <p class="mb-4">
            There live the blind texts. Separated they live in Bookmarksgrove
            right at the coast of the Semantics, a large language ocean.
          </p>
          <p class="mb-0">
            <a href="#" class="btn-learn-more">Learn more</a>
          </p>
        </div>
      </div>
    </div>
</div>
      
</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
    class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<div id="deleteModal" class="modal fade modal-sm">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="modal-title"><h5>Are You Sure?<h5></div>
        <button class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Do you wanna delete?
        </div>
        <div class="modal-footer">       
            <button id="confirmDelete" class="button btn btn-danger">Delete</button>
            <button class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>         
        </div>
    </div>
  </div>
</div>


<!-- Vendor JS Files -->
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<script src="assets/js/jquery.js"></script>
<script>
  let deleteSelect = $(".deleteSelect");
  let deleteKey = undefined;
  
  deleteSelect.on("click",function(e){
    deleteKey = e.currentTarget.getAttribute("data-val");
  })

  $("#confirmDelete").on("click",()=>location.replace("?deleteId="+deleteKey));
  $("#navmenu a").toArray().forEach(element => {
    if(element.href == location.href){
      element.className = "active";
    }
});
let url =location.href.split("/")
    console.log(url[url.length-1].includes("list"));
    let fileName = url[url.length-1];
    if(!fileName.includes("list")) $("#search-wapper").html("")
</script>

</body>

</html>