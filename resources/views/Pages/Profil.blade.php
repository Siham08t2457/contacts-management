@extends('Layout.App')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
@section('content')
<body>
<div class="profile-container">
    <div class="profile-header">
        <img src="{{ asset('assets/img/profile1.jpg') }}" alt="Photo de profil" class="profile-avatar">
        <h1 class="profile-name">Yasinne Dowie</h1>
    </div>

    <form class="profile-form">
        <div class="form-group">
            <label>Nom</label>
            <input type="text" value="Dowie">
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" value="Yassine">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" value="yassine@gmail.com">
        </div>

        <button type="submit" class="update-btn">
            <i class="fas fa-save"></i>
            Mettre à jour le profil
        </button>
    </form>
</div>

<style>
    .profile-container {
    max-width: 600px;
    margin: 30px auto;
    background: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.profile-header {
    text-align: center;
    margin-bottom: 30px;
    padding-bottom: 20px;
    border-bottom: 2px solid #f0f0f0;
}

.profile-avatar {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    object-fit: cover;
    border: 4px solid #6a11cb;
    margin-bottom: 15px;
}

.profile-name {
    color: #6a11cb;
    margin-bottom: 5px;
}

.profile-email {
    color: #666;
    font-size: 1.1rem;
}

.profile-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
}

.form-group label {
    font-weight: 600;
    margin-bottom: 8px;
    color: #333;
}

.form-group input {
    padding: 12px 15px;
    border: 2px solid #e1e5ee;
    border-radius: 5px;
    font-size: 1rem;
    transition: all 0.3s ease;
}

.form-group input:focus {
    outline: none;
    border-color: #6a11cb;
    box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
}

.update-btn {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    border: none;
    padding: 12px 30px;
    border-radius: 5px;
    font-size: 1.1rem;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-top: 10px;
}

.update-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
}
</style>
</body>
</html>
@endsection
