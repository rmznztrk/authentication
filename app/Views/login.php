<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url("login"); ?>">
            <h1>Login Page</h1>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Password">
            </div>
            <div class="mb-3"><input type="submit" value="Login" class="btn btn-primary" /></div>
        </form>
    </div>
</div>