
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS Sending</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <h2 class="text-center">Translator</h2>
        <form class="form-horizontal" action="">

            <div class="form-group">
                <div class="col-sm-10">
                    <input type="textbox" id="text" class="form-control"  name="text" placeholder="Enter text..">
                </div>
            </div>
            <br/>
            <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">Choose language</label>
  </div>
  <select type="text" name="lang" class="custom-select" id="lang">
  <option value="zh">Chinese - 中文</option>
    <option value="es">Spanish - español</option>
    <option value="en">English</option>
    <option value="hi">Hindi - हिन्दी</option>
    <option value="ar">Arabic - العربية</option>
    <option value="pt">Portuguese - português</option>
    <option value="bn">Bengali - বাংলা</option>
    <option value="ru">Russian - русский</option>
    <option value="ja">Japanese - 日本語</option>
    <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
  </select>
</div>

<div class="p-2 w-full">
    <div class="relative">
        <label for="message" class="leading-7 text-sm text-grey-400">Message</label>
        <textarea id="text" name="text" class="form-control"></textarea>
    </div>
</div>
            <br/>
            <div class="form-group">
                <div class="control-label col-sm-2 col-sm-10">
                    <button type="submit" name="convert" value="convert" class="btn btn-primary">Convert</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>