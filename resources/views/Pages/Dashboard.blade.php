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
    <h1>Tableau de Board</h1>
<div class="dashboard">
    <div class="dashboard-stats">
        <div class="dashboard-card">
            <i class="fas fa-users"></i>
            <h3>Total Contacts</h3>
            <div class="number">150</div>
        </div>

        <div class="dashboard-card">
            <i class="fas fa-user-plus"></i>
            <h3>Nouveaux ce mois</h3>
            <div class="number">12</div>
        </div>


        <div class="dashboard-card">
            <i class="fas fa-sync"></i>
            <h3>Mises à jour</h3>
            <div class="number">8</div>
        </div>
    </div>

    <div class="recent-activities">
        <h2>Activités Récentes</h2>

        <div class="activity-item">
            <div class="activity-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <div class="activity-content">
                <p>Nouveau contact ajouté : Khalid Dani</p>
                <div class="activity-time">Il y a 2 heures</div>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-icon">
                <i class="fas fa-edit"></i>
            </div>
            <div class="activity-content">
                <p>Contact modifié : Maria Jati</p>
                <div class="activity-time">Il y a 5 heures</div>
            </div>
        </div>

        <div class="activity-item">
            <div class="activity-icon">
                <i class="fas fa-trash"></i>
            </div>
            <div class="activity-content">
                <p>Contact supprimé : Marwa Anim</p>
                <div class="activity-time">Il y a 1 jour</div>
            </div>
        </div>
    </div>
</div>

<style>
    .dashboard {
    padding: 20px 0;
}

.dashboard-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    margin-bottom: 30px;
}

.dashboard-card {
    background: white;
    padding: 25px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
    text-align: center;
    border-top: 4px solid #6a11cb;
}

.dashboard-card i {
    font-size: 2.5rem;
    color: #6a11cb;
    margin-bottom: 15px;
}

.dashboard-card h3 {
    color: #333;
    margin-bottom: 10px;
    font-size: 1rem;
}

.dashboard-card .number {
    font-size: 2rem;
    font-weight: 700;
    color: #6a11cb;
}

.recent-activities {
    background: white;
    border-radius: 10px;
    padding: 25px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
}

.recent-activities h2 {
    color: #6a11cb;
    margin-bottom: 20px;
    padding-bottom: 10px;
    border-bottom: 2px solid #f0f0f0;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 0;
    border-bottom: 1px solid #f0f0f0;
}

.activity-item:last-child {
    border-bottom: none;
}

.activity-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6a11cb;
}

.activity-content {
    flex: 1;
}

.activity-content p {
    margin: 0;
    color: #333;
}

.activity-time {
    color: #666;
    font-size: 0.9rem;
}
</style>
</body>
</html>
@endsection
