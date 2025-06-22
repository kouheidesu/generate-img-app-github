<!DOCTYPE html>
<html>

<head>
    <title>画像ギャラリー</title>
    <style>
        #imageContainer {
            display: none;
            margin-top: 20px;
        }

        img {
            width: 200px;
            margin: 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <h1>画像表示アプリ</h1>
    <button onclick="showImages()">画像を表示</button>

    <div id="imageContainer">
        @foreach ($images as $image)
        <img src="{{ $image }}" alt="画像">
        @endforeach
    </div>

    <script>
        function showImages() {
            document.getElementById('imageContainer').style.display = 'block';
        }
    </script>
</body>

</html>
