<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 1 | HTML Challenge</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>

    <form action="{{ route("register") }}" method="post">
        @csrf
        <p><label for="firstname">First name : </label></p>
        <p><input type="text" name="firstname" placeholder="Firstname" required></p>
        

        <p><label for="lastname">Last name : </label></p> 
        <p><input type="text" name="lastname" placeholder="Lastname" required></p>

        <p>Gender : </p>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">Male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">Female</label><br>
        <input type="radio" name="gender" id="other" value="other">
        <label for="other">Other</label>
        <p></p>

        <p>Nationality</p>
        <select name="nationality">
            <option value="Indonesian">Indonesian</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Australian">Australian</option>
        </select>
        <p></p>

        <p>Language Spoken : </p>
        <input type="checkbox" name="language1" value="id" id="language1">
        <label for="language1">Bahasa Indonesia</label><br>
        <input type="checkbox" name="language2" value="en" id="language2">
        <label for="language2">English</label><br>
        <input type="checkbox" name="language3" value="other" id="language3">
        <label for="language3">Other</label>
        <p></p>

        <p>Bio : </p>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <p></p>

        <button type="submit">Sign Up</button>

    </form>

</body>
</html>