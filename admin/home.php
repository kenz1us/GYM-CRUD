<div class="text-center" style="text-align: center; padding-left: 25%;   padding-top: 10%; "  >
                <h1 style="font-size: 48px;">SELAMAT DATANG ADMIN GYMSHARK</h1>
                <p style="font-size: 24px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt unde, sequi perspiciatis<br> 
                sapiente laudantium optio aliquam ratione atque rem, consequatur iusto?<br><br></p>
                <?php if(isset($_SESSION['username'])): ?>
                    <a class="btn btn-primary" style="font-size: 24px;"><?php echo "Semangat Berkerja Admin ". $_SESSION['username'] ; ?></a>  
                <?php else: ?>
                    <a class="btn btn-primary" href="auth/login.php" style="font-size: 24px;">Login</a>
                <?php endif; ?>
            </div>