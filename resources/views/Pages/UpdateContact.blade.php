@extends('Layout.App')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier</title>
</head>
@section('content')
        <input type="hidden" name='id' value='{{$conntc->id}}'/>

<body>
    <a href="{{route('contact-list')}}" class="add-contact-btn">
    <i class="fas fa-arrow-left"></i>
    Retour
</a>
       <div class="contact-form">
    <h2>    <i class="fas fa-user-edit"></i>
Modifier Contact</h2>
    <form action="{{route('contact-update')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type='hidden' name='id' value='{{$conntc->id}}'/>
        <div class="form-row">
            <div class="form-group">
                <label>Nom :</label>
                <input type="text" name="nom" value="{{$conntc->nom}}" />
            </div>
            <div class="form-group">
                <label>Prénom :</label>
                <input type="text" name="prenom" value='{{$conntc->prenom}}' />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Email :</label>
                <input type="text" name="email" value='{{$conntc->email}}' />
            </div>
            <div class="form-group">
                <label>Téléphone :</label>
                <input type="text" name="telephone" value="{{$conntc->telephone}}" />
            </div>
        </div>

        <div class="form-row">
            <div class="form-group">
                <label>Poste :</label>
                <input type="text" name="poste" value="{{$conntc->poste}}" />
            </div>
           <div class="form-group">
    <label>Photo :</label>
    <div class="file-input-container">
        <input type="file" name="photo" id="photo" value="{{$conntc->photo}}" />
        <label for="photo" class="file-input-label">
            <i class="fas fa-cloud-download-alt"></i>
            Choisir une photo
        </label>
        <div class="file-name" id="file-name">Aucun fichier choisi</div>
    </div>
</div>
        </div>

        <button type="submit" class="submit-btn">Modifier</button>
    </form>
</div>


    <style>
        /* pouur button retour*/
    .add-contact-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    text-decoration: none;
    padding: 12px 25px;
    border-radius: 5px;
    font-weight: 600;
    transition: all 0.3s ease;
    margin-bottom: 25px;
    box-shadow: 0 4px 12px rgba(106, 17, 203, 0.2);
     float: right;
    clear: both;
    /*le zmovment de button*/
         transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
           position: sticky;
    top: 20px;
    float: right;
    z-index: 100;

}

.add-contact-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(106, 17, 203, 0.3);
    color: white;
        /*movmentt de button*/
    transform: translateY(4px);
    box-shadow: 0 2px 8px rgba(106, 17, 203, 0.3);
}

.add-contact-btn i {
    font-size: 1.1rem;
}


        /* Styles pour formulaire*/
.contact-form {
    background: white;
    border-radius: 10px;
    padding: 30px;
    margin: 30px auto;
    max-width: 800px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.contact-form h2 {
    color: #6a11cb;
    margin-bottom: 25px;
    text-align: center;
    font-size: 1.8rem;
}

.form-group {
    margin-bottom: 20px;
}

.form-row {
    display: flex;
    gap: 20px;
    margin-bottom: 20px;
}

.form-row .form-group {
    flex: 1;
}

.contact-form label {
    display: block;
    margin-bottom: 8px;
    font-weight: 600;
    color: #333;
}

.contact-form input[type="text"],
.contact-form input[type="file"] {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e1e5ee;
    border-radius: 5px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background-color: #f8f9fa;
}

.contact-form input[type="text"]:focus,
.contact-form input[type="file"]:focus {
    outline: none;
    border-color: #6a11cb;
    background-color: white;
    box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
}

.submit-btn {
    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    border: none;
    padding: 12px 30px;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: block;
    margin: 30px auto 0;
    min-width: 200px;
}

.submit-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(106, 17, 203, 0.3);
}

/* responsive */
@media screen and (max-width: 768px) {
    .form-row {
        flex-direction: column;
        gap: 0;
    }

    .contact-form {
        padding: 20px;
        margin: 20px;
    }
}
      /* style pour input photo*/
.file-input-container {
    position: relative;
    margin-top: 5px;
}

.file-input-container input[type="file"] {
    display: none;
}

.file-input-label {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 12px 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
    border: 2px solid #e1e5ee;
    border-radius: 5px;
    color: #6a11cb;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
}

.file-input-label:hover {
    background: linear-gradient(135deg, #e9ecef 0%, #dee2e6 100%);
    border-color: #2575fc;
    transform: translateY(-2px);
}

.file-input-label i {
    font-size: 1.2rem;
}

.file-name {
    margin-top: 8px;
    font-size: 0.9rem;
    color: #666;
    font-style: italic;
}
    </style>
    <script>
        // csce script pour afficher le nom du fichier selected
document.getElementById('photo').addEventListener('change', function(e) {
    const fileName = e.target.files[0] ? e.target.files[0].name : 'Aucun fichier choisi';
    document.getElementById('file-name').textContent = fileName;
});
    </script>
</body>
</html>
@endsection
