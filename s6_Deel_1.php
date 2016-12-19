<body>
<div class="pijltjelinks"> <a href="S5_instructor-admin.html"><span>&#8592;</span></a></div>
<div class="pijltjerechts"> <a href="S7_betaal-tabel.php"><span>&#8594;</span></a></div>

<h2>Lijst van instructoren</h2>
<ol>
<li>Weert Gilders</li>
<li>Bart Scharp</li>
<li>Filthy Frank</li>
</ol>

<?php
        function generateRandomNumber($length) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }
        echo generateRandomNumber(10);
        ?>

        <p></p>

        <button type="button">Betalen!</button>
<div class="pijltjelinks"> <a href="section9-2016.html"><span>&#8592</span></a></div>
<div class="pijltjerechts"> <a href="section9-2017.html"><span>&#8594</span></a></div>
</body>
