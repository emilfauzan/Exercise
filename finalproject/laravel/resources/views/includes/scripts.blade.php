<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript">
    // display image onclick
    const changeImage = src => {
        document.getElementById('main').src = src
    }

    // section show/hide onclick
    const targetDiv1 = document.getElementById("div1");
    const single1 = document.getElementById("desc");
    single1.onclick = function() {
        if (targetDiv1.style.display !== "none") {
            targetDiv1.style.display = "none";
            targetDiv2.style.display = "block";
        } else {
            targetDiv1.style.display = "block";
            targetDiv2.style.display = "none";
        }
    };
    const targetDiv2 = document.getElementById("div2");
    const single2 = document.getElementById("incl");
    single2.onclick = function() {
        if (targetDiv2.style.display !== "none") {
            targetDiv2.style.display = "none";
            targetDiv1.style.display = "block";
        } else {
            targetDiv2.style.display = "block";
            targetDiv1.style.display = "none";
        }
    };
</script>