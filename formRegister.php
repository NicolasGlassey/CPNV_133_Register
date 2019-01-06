<!--
 * Sources :  getbootstrap.com
 *            https://www.respocert.com/php/php-forms-best-practices
 *            https://www.the-art-of-web.com/html/html5-form-validation/
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 133 - Register
 * Created  : 25.12.2018 - 10:18
 */
-->

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
</head>

<body>
<form method="POST" name="formRegister" action="dataRegister.php">
    <div class="form-group">
        <label for="pseudo">Pseudo *</label>
        <input type="text" class="form-control" id="pseudo" name="inputPseudo" aria-describedby="pseudoHelp" placeholder="Enter pseudo" required>
        <small id="pseudoHelp" class="form-text text-muted">Pseudo will be shared with other users.</small>
    </div>
    <div class="form-group">
        <label for="userName">User Name *</label>
        <input type="text" class="form-control" id="userName" name="inputUserName" aria-describedby="userNameHelp" placeholder="Enter user name" required>
        <small id="userNameHelp" class="form-text text-muted">User Name will not be shared.</small>
    </div>
    <div class="form-group">
        <label for="inputEmail">Email address *</label>
        <input type="email" class="form-control" id="inputEmail" name="inputEmail" aria-describedby="emailHelp" placeholder="firstname@domain.ch" required>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword">Password *</label>
        <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="inputPhoneNumber">Phone number</label>
        <input type="tel" class="form-control" id="inputPhoneNumber" name="inputPhoneNumber" placeHolder="+41 21 786 78 78">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="checkNewsLetter" name="inputNewsLetter">
        <label class="form-check-label" for="checkNewsLetter">Newsletter</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
