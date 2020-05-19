<?php

require './elements/header.php';

?>

<div class="bigSeparator"></div>
<div class="containerBig">

    <div class="container col-md-12 sliderHorizontal">
        <div class="slide hi-slide">
            <div class="hi-prev"></div>
            <div class="hi-next"></div>
            <ul>
                <li>
                    <img src="./image/img1.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img2.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img3.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img4.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img1.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img2.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img3.jpg" atl="">
                </li>
                <li>
                    <img src="./image/img4.jpg" atl="">
                </li>
            </ul>
        </div>

    </div>
</div>

<script src="/js/jquery.hislide.js"></script>
<script>
    $('.slide').hiSlide();
</script>
<?php

require './elements/footer.php'

?>