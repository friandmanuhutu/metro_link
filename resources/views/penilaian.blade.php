<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RATING</title>
    <link rel="stylesheet" href="/css/penilaian.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="post">
            <div class="text">Terimakasih atas masukannya!</div>
            <div class="edit">Edit</div>
            {{-- <span><a href="/metrolink/service">BACK TO SERVICE</a></span> --}}
        </div>

        <div class="star-widget">
            <input type="radio" name="rate" id="rate-5">
            <label for="rate-5" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-4">
            <label for="rate-4" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-3">
            <label for="rate-3" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-2">
            <label for="rate-2" class="fas fa-star"></label>
            <input type="radio" name="rate" id="rate-1">
            <label for="rate-1" class="fas fa-star"></label>
            <form action="#">
                <header></header>
                <div class="textarea">
                    <textarea name="textarea" id="" cols="30" placeholder="Beri Kami Masukan"></textarea>
                </div>
                <div class="btn">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
        <span><a href="/metrolink/service">BACK TO SERVICE</a></span>
    </div>
    <script>
        const btn = document.querySelector("button");
        const post = document.querySelector(".post");
        const widget = document.querySelector(".star-widget");
        const editBtn = document.querySelector(".edit");
        btn.onclick = ()=>{
            widget.style.display = "none";
            post.style.display = "block";
        editBtn.onclick = ()=>{
            widget.style.display = "block";
            post.style.display = "none  ";
            }
        return false;
        }
    </script>
</body>

</html>
