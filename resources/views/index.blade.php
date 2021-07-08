<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <div class="contact">
    <fieldset class="contact-inner">
      <p class="contact-input">
        <input type="text" name="name" placeholder=" Nama Anda" autofocus required>
      </p>
      
      <p class="contact-input">
        <input type="email" name="email" placeholder=" Email Anda" autofocus required>
      </p>
      
      <p class="contact-input">
        <input type="number" name="phone" placeholder=" No Telp Anda (08952688777)" autofocus required>
      </p>

      <p class="contact-input">
        <textarea name="address" placeholder=" Alamat Anda"></textarea>
      </p>

      <p class="contact-input">
        <label for="select" class="select">
          <select name="gender" id="select">
            <option value="" selected>Pilih Jenis Kelamin…</option>
            <option value="man">Pria</option>
            <option value="woman">Wanita</option>
          </select>
        </label>
      </p>

      <p class="contact-submit">
        <button  onclick="submit()">Submit</button>
      </p>
    </div>
  </form>
</body>
</html>

<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Logic -->
<script src="{{ asset('js/index.js') }}"></script>