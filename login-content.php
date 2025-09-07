<div class="login-body">
    <div class="login-container">
        <div class="login-logo-section">
            <img src="<?php echo $pathToRoot; ?>images/medigap.png" alt="MEDIGAP Logo">
        </div>
        <div class="login-box">
            <h2>Log in</h2>
            <form action="index.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit">Enter</button>
            </form>
            <div class="signup-text">
                Don’t have an account yet? Sign up here<br>
                <button type="button" onclick="window.location.href='signup.php'">Sign up</button>
            </div>
        </div>
    </div>
</div>