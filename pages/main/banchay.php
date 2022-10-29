<?php
?>
<div class="ban-chay d-flex flex-row">
    <div class="ban-chay_text d-flex flex-column">
        <p class="title">Sản phẩm bán chạy nhất</p>
        <p class="name">Emporio Armani Hybrid</p>
        <h2>Smartwatch cung cấp</h2>
        <p class="intro">Trái ngược với niềm tin phổ biến, Lorem Ípum không đơn giản là văn bản ngẫu nhiên.
            Nơi có nguồn gốc từ 1 phần của văn học Latin cổ điển từ năm 45 TCN làm cho nó hơn 2000 tuổi.
        </p>
        <div class="media d-flex flex-row">

            <div class="counter face">
                <p>Days</p>
                <h2>0</h2>
            </div>
            <div class="counter youtube">
                <p>Hrs</p>
                <h2>0</h2>
            </div>
            <div class="counter tiktok">
                <p>Mins</p>
                <h2>0</h2>
            </div>
            <div class="counter inta">
                <p>Secs</p>
                <h2>0</h2>
            </div>
        </div>
        <button>Shop Now</button>
    </div>
    <div class="ban-chay_img">
        <img src="https://galle.vn/upload_images/images/2022/03/22/citizen-eco-drive-0(1).jpg" alt="">
    </div>
</div>
<script type="text/javascript">
    const face = document.querySelector('.counter.face h2')
    const youtube = document.querySelector('.counter.youtube h2')
    const tiktok = document.querySelector('.counter.tiktok h2')
    const inta = document.querySelector('.counter.inta h2')

    function counterUp(el, to) {
        let speed = 200
        let from = 0
        let step = to / speed
        const counter = setInterval(function() {
            from += step
            if (from > to) {
                clearInterval(counter)
                el.innerText = to
            } else {
                el.innerText = Math.ceil(from)
            }
        }, 1)
    }
    window.addEventListener("scroll", function() {
        const scrollHeight = window.pageYOffset;
        //const navHeight = navbar.getBoundingClientRect().height;
        console.log('scroll height: ', scrollHeight)
        //console.log('nav height: ', navHeight)
        if (scrollHeight > 1400 && scrollHeight < 1700) {
            counterUp(face, 33)
            counterUp(youtube, 10)
            counterUp(tiktok, 990)
            counterUp(inta, 256)
            // navbar.classList.add("fixed-nav");

        }

    });

    counterUp(face, 33)
    counterUp(youtube, 10)
    counterUp(tiktok, 990)
    counterUp(inta, 256)
</script>