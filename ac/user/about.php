<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Montserrat';
            text-align: justify;

            margin: 0 auto;

        }

        .text {
            font-size: 24px;
        }

        .moretext {
            display: none;
        }

        #myVideo {
            position: absolute;
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            object-fit: cover
        }

        .content {
            position: fixed;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
            padding: 20px;
        }

        #myBtn {
            width: 200px;
            font-size: 18px;
            padding: 10px;
            border: none;
            background: #000;
            color: #fff;
            cursor: pointer;
            border-radius: 25px;
            opacity: 50%;
        }

        #myBtn:hover {
            background: #ddd;
            color: black;

        }

        .text.show-more .moretext{
            display: inline;
        }
    </style>
</head>

<body>

    <video autoplay muted loop id="myVideo">
        <source src="./wood.mp4" type="video/mp4">
        Your browser does not support HTML5 video.
    </video>

    <div class="content">
        <h1>About us</h1>
        <p class="text">Lorem ipsum dolor sit amet, an his etiam torquatos. Tollit soleat phaedrum te duo, eum cu
            recteque expetendis
            neglegentur. Cu mentitum maiestatis persequeris pro, pri ponderum tractatos ei. Id qui nemore latine
            molestiae, ad mutat oblique delicatissimi pro.
            <span class="moretext"> ipsum dolor sit amet, consectetur
                adipisicing elit.
                Beatae minima at laboriosam eaque fuga impedit distinctio minus! Eveniet beatae deleniti impedit rem
                accusantium, veritatis at? Molestias dolores, quae veniam consequatur ex dolor beatae facilis optio fuga
                a
                molestiae doloribus amet delectus assumenda tenetur, quaerat sequi excepturi dicta, inventore quia
                consequuntur modi! Consectetur voluptatum expedita corrupti quo, animi saepe omnis magni neque officiis
                id
                quis quaerat sint dolorem aliquam velit ipsam labore obcaecati tempora suscipit cum deleniti laboriosam
                itaque! Ut aliquam praesentium esse vel laborum eveniet sapiente labore, quasi placeat quidem quam rerum
                impedit fuga repellendus distinctio dicta quos dignissimos tenetur</span>
        </p>
        <button id="myBtn" >view more</button>
    </div>

    <script>
        var video = document.getElementById("myVideo");
        const myBtn = document.getElementById("myBtn");
        const text = document.querySelector('.text');

        myBtn.addEventListener('click', (e)=> {
            text.classList.toggle('show-more');
        })

       

    </script>

</body>

</html>