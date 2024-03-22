<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <!-- component -->
<div class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
	<div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
		<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Registration Now!!!</h1>

		<form action="/register" method="POST">
			@csrf
			<div class="mb-4">
				<label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Nama</label>
				<input type="text" id="name" name="name" class="@error('name')is-invalid @enderror shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Nama" required>
				
			</div>
			<div class="mb-4">
				<label for="username" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Username</label>
				<input type="text" id="username" name="username" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Username" required>
			</div>
			<div class="mb-4">
				<label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Email Address</label>
				<input type="email" id="email" name="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" required>
			</div>
			<div class="mb-4">
				<label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
				<input type="password" id="password" name="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password" required>
				
			</div>
			
			<button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
            <div class="flex items-center justify-between mb-4">
				
				<a href="/register"
					class="text-xs text-primary hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">All Ready Register? || <a href="http:/login" class="block text-xs text-primary font-bold">Register</a></a>
			</div>
		</form>

	</div>
</div>
</body>
</html>