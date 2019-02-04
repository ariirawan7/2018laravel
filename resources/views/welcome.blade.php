<!DOCTYPE html>
<html>
<head>
    <title>My Panda</title>
</head>
<body>
<h1>Hello, <?= $name; ?></h1>
<h2>You are <?= $age; ?> years old</h2>
<ul>

    @foreach ($tasks as $task)
        <li>
        
         <a href="/tasks/{{ $task->id }}" >
         {{ $task->body }} 
        </a>
        </li>
    @endforeach
</ul>
</body>
</html>