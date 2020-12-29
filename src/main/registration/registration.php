<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="src/main/main.css">
    <link rel="stylesheet" href="src/main/registration/registration.css"
</head>
<body>
    <main class="wrap wrap-reg">
        <div class="welcome">
            <h2>Welcome to</h2>
            <!-- TODO ридумать, как правильно выгрузить SVG -->
            <img class="logo" src="assets/logo/1.png">
        </div>
        <div class="field">
            <div class="tabs">
               <button class="btn tab tab-left" onclick="openTab(event, 'content-login')" id="defaultOpen">Log in</button>
               <button class="btn tab tab-right" onclick="openTab(event, 'content-registration')">Registration</button>
            </div>
            <div class="tabcontent" id="content-login">
                <form action="">
                    <div class="formwrap">
                        <div class="form-field">
                            <label class="form-label">Username / Email</label>
                            <input />
                        </div>
                        <div class="form-field">
                            <label class="form-label">Password</label>
                            <input />
                            <a href="" class="forgot-pswd-link">I forgot my password</a>
                        </div>
                        <button class="btn btn-192x48 btn-login">Log in</button>
                    </div>
                </form>
            </div>
            <div class="tabcontent" id="content-registration">
               <form action="">
                   <div class="formwrap">
                      <div class="form-field">
                          <label class="form-label">Username</label>
                          <input />
                      </div>
                      <div class="form-field">
                          <label class="form-label">Email</label>
                          <input />
                      </div>
                      <div class="form-field">
                          <label class="form-label">Password</label>
                          <input />
                      </div>
                      <div class="form-field">
                          <label class="form-label">Repeat password</label>
                          <input />
                      </div>
                      <button class="btn btn-192x48 btn-reg">Create account</button>
                   </div>
               </form>
            </div>
        </div>
    </main>
</body>
<script src="src/main/registration/registration.js"></script>
</html>