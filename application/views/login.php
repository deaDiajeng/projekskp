    <style>
        body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f0f0f0;
        font-family: 'Segoe UI', sans-serif;
        }

        .login-container {
        display: flex;
        height: 85vh;
        width: 90%;
        max-width: 1000px;
        background-color: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        }

        .login-left {
        flex: 1;
        background-color: #ffffff;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
        }   


        .login-left img {
        max-width: 80%;
        height: auto;
        }

        .login-right {
        flex: 1;
        background-color: #2196f3;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px;
        }

        .login-right h2 {
        font-weight: bold;
        margin-bottom: 30px;
        text-align: center;
        }

        .form-control {
        border-radius: 30px;
        padding: 12px 20px;
        font-size: 16px;
        border: none;
        margin-bottom: 20px;
        }

        .btn-login {
        border-radius: 30px;
        background-color:rgb(206, 181, 70);
        border: none;
        padding: 12px;
        font-size: 16px;
        font-weight: bold;
        color: white;
        width: 100%;
        transition: 0.3s ease;
        }

        .btn-login:hover {
        background-color:rgb(196, 162, 67);
        }

        .alert {
        border-radius: 10px;
        }

        @media (max-width: 768px) {
        .login-container {
            flex-direction: column;
            height: auto;
            border-radius: 0;
        }

        .login-left, .login-right {
            flex: none;
            width: 100%;
            padding: 30px;
        }

        .login-left img {
            max-width: 200px;
        }
        }
    </style>
<body class="bg-light">
    <!-- <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 350px;">
            <h3 class="text-center mb-4">Login</h3>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
            <form action="<?= site_url('login/authenticate'); ?>" method="POST">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div> -->

     <div class="login-container">
    <!-- Left illustration -->
    <div class="login-left">
      <img src="<?= base_url('public/img/rq.png') ?>" alt="Login Illustration">
    </div>

    <!-- Right form -->
    <div class="login-right">
      <h2 class="text-center">WELCOME</h2>

      <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger"><?= $this->session->flashdata('error'); ?></div>
      <?php endif; ?>

      <form action="<?= site_url('login/authenticate'); ?>" method="POST">
        <input type="text" name="username" class="form-control" placeholder="Username" required>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button type="submit" class="btn btn-login">SUBMIT</button>
      </form>
    </div>
  </div>

</body>

