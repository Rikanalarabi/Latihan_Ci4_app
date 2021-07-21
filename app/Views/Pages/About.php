<?= $this->extend("Layout/Template");?>

<?= $this->section("content");?>
    <div class="container mt-3">
        <h1>About</h1>
        <ol>
            <li>Nama : <?= $Name;?></li>
            <li>Email : <a href="https://mail.google.com/mail/u/0/?view=cm&tf=1&fs=1&to=Rikanalarabi8@gmail.com" class="fw-bold"><?= $Email;?></a></>
        </ol>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,160L48,154.7C96,149,192,139,288,138.7C384,139,480,149,576,154.7C672,160,768,160,864,186.7C960,213,1056,267,1152,245.3C1248,224,1344,128,1392,80L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<?= $this->endSection();?>