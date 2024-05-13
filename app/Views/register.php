<div class="card">
    <div class="card-body">
        <form method="post" action="<?= base_url("register"); ?>">
            <h1>Register Page</h1>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" required type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" required type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" required type="text" class="form-control" id="password" placeholder="Password">
            </div>
            <div class="mb-3"><input type="submit" value="Register" class="btn btn-primary" /></div>
        </form>
    </div>
</div>