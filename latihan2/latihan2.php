<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hallo</title>
    <style>
    .file-input label {
        display: block;
        position: relative;
        width: 200px;
        height: 50px;
        border-radius: 25px;
        background: linear-gradient(40deg, #ff6ec4, #7873f5);
        box-shadow: 0 4px 7px rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-weight: bold;
        cursor: pointer;
        transition: transform .2s ease-out;
    }

    #file {
        display: none;
    }
    </style>
</head>

<body>
    <h2><?php var_dump($_FILES['kond']); ?></h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="file-input">
            <input type="file" id="file" class="file">
            <label for="file">
                <p class="file-name">Select file</p>
            </label>
        </div>
        <br>
        <button type="submit">Kumpul</button>
    </form>
    <script>
    const file = document.querySelector('#file');
    file.addEventListener('change', (e) => {
        // Get the selected file
        const [file] = e.target.files;
        // Get the file name and size
        const {
            name: fileName,
            size
        } = file;
        // Convert size in bytes to kilo bytes
        const fileSize = (size / 1000).toFixed(2);
        // Set the text content
        const fileNameAndSize = `${fileName} - ${fileSize}KB`;
        document.querySelector('.file-name').textContent = fileNameAndSize;
    });
    </script>
</body>

</html>