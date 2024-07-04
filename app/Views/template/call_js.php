<!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".bg-loader").hide();
    })

    function setScrollbar() {
        window.onbeforeunload = function () {
            localStorage.setItem('scrollPosition', window.scrollY);
        };
    }

    window.onload = function () {
        var scrollPosition = localStorage.getItem('scrollPosition');
        if (scrollPosition !== null) {
            window.scrollTo(0, scrollPosition);
            localStorage.removeItem('scrollPosition'); // Hapus setelah dipulihkan
        }
    };

</script>