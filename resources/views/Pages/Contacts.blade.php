@extends('Layout.App')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacts</title>
</head>
@section('content')
<body>

       <h1>List De Contacts</h1>

       {{-- En haut de votre page contact-list.blade.php --}}
<div class="content">
    {{-- Messages flash --}}
    @if(session('success'))
        <div class="alert alert-success">
            <i class="fas fa-check-circle"></i>
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-error">
            <i class="fas fa-exclamation-circle"></i>
            {{ session('error') }}
        </div>
    @endif



</div>
<style>
  .stats-cards {
    display: inline-flex;
    margin-bottom: 15px;
}

.stat-card {
    background: white;
    padding: 10px 15px;
    border-radius: 6px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
    text-align: center;
    border-left: 3px solid #6a11cb;
    display: flex;
    align-items: center;
    gap: 10px;
}

.stat-card i {
    font-size: 1.5rem;
    color: #6a11cb;
}

.stat-card-content {
    text-align: left;
}

.stat-card h3 {
    color: #333;
    margin: 0;
    font-size: 0.8rem;
    font-weight: 600;
}

.stat-card .count {
    font-size: 1.3rem;
    font-weight: 700;
    color: #6a11cb;
}
</style>
<div class="search-filters">
    <div class="search-bar">
        <i class="fas fa-search"></i>
        <input type="text" id="search-input" placeholder="Rechercher par nom, prénom, email...">
    </div>

    <div class="filter-group">
        <select class="filter-select" id="filter-post">
            <option value="">Tous les postes</option>
            <option value="Manager">Manager</option>
            <option value="Responsable Marketing">Responsable Marketing</option>
            <option value="Chef de Service">Chef de Service</option>
            <option value="Développeur Web">Développeur Web</option>
            <option value="Designer">Designer</option>
            <option value="Responsable">Responsable RH</option>
        </select>

        <select class="filter-select" id="filter-sort">
            <option value="nom-asc">Nom A-Z</option>
            <option value="nom-desc">Nom Z-A</option>
            <option value="date-recent">Plus récent</option>
            <option value="date-ancien">Plus ancien</option>
        </select>

        <button class="clear-filters" id="clear-filters">
            <i class="fas fa-times"></i>
            Effacer
        </button>
    </div>
</div>
<div class="stats-cards">
    <div class="stat-card">
        <i class="fas fa-users"></i>
        <h3>Total Contacts</h3>
        <span class="count">{{ $contactt->count() }}</span>
    </div>
</div>
     <a href="{{route('contact-form')}}" class="add-contact-btn">
    <i class="fas fa-plus-circle"></i>
    Ajouter Contact
</a>

<div class="contacts-table">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Telephone</th>
                <th>Poste</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactt as $contact)
            <tr>
                <td>{{$contact->id}}</td>
                <td>
                    @if($contact->photo)
                        <img src="{{ asset('storage/' . $contact->photo) }}" alt="Photo" class="contact-photo">
                    @else
                        <span class="no-photo">Aucune photo</span>
                    @endif
                </td>
                <td>{{$contact->nom}}</td>
                <td>{{$contact->prenom}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->telephone}}</td>
                <td>{{$contact->poste}}</td>
                <td>
                    <div class="action-buttons">
                        <a href="{{route('contact-edit', $contact->id)}}" class="edit-btn">
                            <i class="fas fa-edit"></i>
                            Modifier
                        </a>
                        <form action="{{route('contact-delete')}}" method="POST" class="delete-form">
                            @csrf
                            <input type='hidden' name='id' value='{{$contact->id}}'>
                            <button type="submit" class="delete-btn">
                                <i class="fas fa-trash"></i>
                                Supprimer
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <style>
    /* pouur button ajouter*/
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
}

.add-contact-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 18px rgba(106, 17, 203, 0.3);
    color: white;
}

.add-contact-btn i {
    font-size: 1.1rem;
}

/*pour tableau*/
.contacts-table {
    width: 100%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 30px;
}

.contacts-table table {
    width: 100%;
    border-collapse: collapse;
}

.contacts-table th {

    background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
    color: white;
    padding: 15px 12px;
    text-align: left;
    font-weight: 600;
    font-size: 0.95rem;
}

.contacts-table td {
    padding: 12px;
    border-bottom: 1px solid #f0f0f0;
    vertical-align: middle;
}

.contacts-table tbody tr:hover {
    background-color: #f8f9fa;
}

.contacts-table tbody tr:last-child td {
    border-bottom: none;
}

.contact-photo {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #e9ecef;
}

.no-photo {
    color: #6c757d;
    font-style: italic;
    font-size: 0.9rem;
}

/* button actionn*/
.action-buttons {
    display: flex;
    gap: 10px;
    align-items: center;
}

.edit-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #28a745;
    color: white;
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 0.9rem;
    transition: all 0.3s ease;
}

.edit-btn:hover {
    background: #218838;
    transform: translateY(-1px);
    color: white;
}

.delete-form {
    margin: 0;
}

.delete-btn {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #dc3545;
    color: white;
    border: none;
    padding: 8px 15px;
    border-radius: 5px;
    font-size: 0.9rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.delete-btn:hover {
    background: #c82333;
    transform: translateY(-1px);
}

/* styles de messages actio */
.alert {
    padding: 15px 20px;
    border-radius: 5px;
    margin-bottom: 25px;
    font-weight: 500;
    display: flex;
    align-items: center;
    gap: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.alert-success {
    background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
    color: #155724;
    border-left: 4px solid #28a745;
}

.alert-error {
    background: linear-gradient(135deg, #f8d7da 0%, #f5c6cb 100%);
    color: #721c24;
    border-left: 4px solid #dc3545;
}

.alert-warning {
    background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%);
    color: #856404;
    border-left: 4px solid #ffc107;
}

.alert i {
    font-size: 1.2rem;
}

/* Section Recherche et Filtres */
.search-filters {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    margin-bottom: 25px;
    display: flex;
    gap: 20px;
    align-items: center;
    flex-wrap: wrap;
}

.search-bar {
    position: relative;
    flex: 1;
    min-width: 300px;
}

.search-bar i {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #6a11cb;
    font-size: 1.1rem;
}

.search-bar input {
    width: 100%;
    padding: 12px 15px 12px 45px;
    border: 2px solid #e1e5ee;
    border-radius: 5px;
    font-size: 1rem;
    transition: all 0.3s ease;
    background-color: #f8f9fa;
}

.search-bar input:focus {
    outline: none;
    border-color: #6a11cb;
    background-color: white;
    box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
}

.filter-group {
    display: flex;
    gap: 15px;
    flex-wrap: wrap;
}

.filter-select {
    padding: 12px 15px;
    border: 2px solid #e1e5ee;
    border-radius: 5px;
    font-size: 1rem;
    background-color: #f8f9fa;
    color: #333;
    cursor: pointer;
    transition: all 0.3s ease;
    min-width: 180px;
}

.filter-select:focus {
    outline: none;
    border-color: #6a11cb;
    background-color: white;
    box-shadow: 0 0 0 3px rgba(106, 17, 203, 0.1);
}

.clear-filters {
    display: flex;
    align-items: center;
    gap: 8px;
    background: #6c757d;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: all 0.3s ease;
}

.clear-filters:hover {
    background: #5a6268;
    transform: translateY(-2px);
}

/* Responsive */
@media screen and (max-width: 768px) {
    .search-filters {
        flex-direction: column;
        align-items: stretch;
    }

    .search-bar {
        min-width: auto;
    }

    .filter-group {
        flex-direction: column;
    }

    .filter-select {
        min-width: auto;
    }
}
</style>

<script>
    // Fonctionnalité de recherche et filtres
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('search-input');
    const filterPost = document.getElementById('filter-post');
    const filterSort = document.getElementById('filter-sort');
    const clearFilters = document.getElementById('clear-filters');
    const tableRows = document.querySelectorAll('.contacts-table tbody tr');

    function filterContacts() {
        const searchTerm = searchInput.value.toLowerCase();
        const postFilter = filterPost.value;
        const sortValue = filterSort.value;

        tableRows.forEach(row => {
            const nom = row.cells[2].textContent.toLowerCase();
            const prenom = row.cells[3].textContent.toLowerCase();
            const email = row.cells[4].textContent.toLowerCase();
            const poste = row.cells[6].textContent;

            const matchesSearch = nom.includes(searchTerm) ||
                                prenom.includes(searchTerm) ||
                                email.includes(searchTerm);

            const matchesPost = !postFilter || poste === postFilter;

            if (matchesSearch && matchesPost) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });

        // Tri des résultats (basique)
        if (sortValue === 'nom-asc') {
            sortTable(2, 'asc');
        } else if (sortValue === 'nom-desc') {
            sortTable(2, 'desc');
        }
    }

    function sortTable(columnIndex, direction) {
        const tbody = document.querySelector('.contacts-table tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));

        rows.sort((a, b) => {
            const aValue = a.cells[columnIndex].textContent.toLowerCase();
            const bValue = b.cells[columnIndex].textContent.toLowerCase();

            if (direction === 'asc') {
                return aValue.localeCompare(bValue);
            } else {
                return bValue.localeCompare(aValue);
            }
        });

        // Réorganiser les rows dans le tbody
        rows.forEach(row => tbody.appendChild(row));
    }

    function clearAllFilters() {
        searchInput.value = '';
        filterPost.selectedIndex = 0;
        filterSort.selectedIndex = 0;
        filterContacts();
    }

    // Événements
    searchInput.addEventListener('input', filterContacts);
    filterPost.addEventListener('change', filterContacts);
    filterSort.addEventListener('change', filterContacts);
    clearFilters.addEventListener('click', clearAllFilters);
});
</script>
</body>
</html>
@endsection
