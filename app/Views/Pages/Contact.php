<?= $this->extend("Layout/Template");?>

<?= $this->section("content");?>
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <h1>Contact Us</h1>
                <?php foreach($Alamat as $a) : ?>
                    <ol>
                        <li><?= $a["tipe"];?></li>
                        <li><?= $a["Alamat"];?></li>
                        <li><?= $a["Kota"];?></li>
                    </ol>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#6c757d" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,133.3C384,139,480,117,576,138.7C672,160,768,224,864,245.3C960,267,1056,245,1152,218.7C1248,192,1344,160,1392,144L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
<?= $this->endSection();?>