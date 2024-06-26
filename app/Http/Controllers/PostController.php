<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];

        return $posts;
    }

    public function show($id)
    {
        $posts = [
            [
                "id" => 1,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 2,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ],
            [
                "id" => 3,
                "name" => "Имя поста",
                "content" => "Содержимое поста",
                "date" => "Дата создания поста"
            ]
        ];

        return $posts[$id - 1];
    }

    public function store(Request $request)
    {
        return $request;
    }

    public function update(Request $request, $id)
    {
        return [
            "update" => true
        ];
    }

    public function destroy($id)
    {
        return [
            "deleted" => true
        ];
    }

    public function zadanie2()
    {
        $employees = DB::table('employees')->orderBy('salary')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>position</th><th>Salary</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->name . '</td>';
            echo '<td>' . $employee->position . '</td>';
            echo '<td>' . $employee->salary . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public function zadanie3()
    {
        $query = DB::table('employees')->where(function ($query) {
            $query->where('salary', 400)
                ->orWhere('id', '>', 4);
        })
            ->get();
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Name</th><th>position</th><th>Salary</th></tr>';
        foreach ($query as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->name . '</td>';
            echo '<td>' . $employee->position . '</td>';
            echo '<td>' . $employee->salary . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    public function zadanie4()
    {
        $query = DB::table('employees')->where('id', 3)->get();
        foreach ($query as $post) {
            echo '<p><strong> Пользователь </strong>ID: ' . $post->id . '</p>';
            echo '<p> Имя: ' . $post->name . '</p>';
            echo '<p> Дата рождения: ' . $post->birthday . '</p>';
            echo '<p> Должность: ' . $post->position . '</p>';
            echo '<p> Зарплата: ' . $post->salary . '</p>';
        }
    }
    public function zadanie5()
    {
        $query = DB::table('employees')->where('id', 5)->get();
        foreach ($query as $post) {
            echo '<p> Имя работника с id=5 ' . $post->name . '</p>';
        }
    }
    public function zadanie6() //выведутся все работники, потому что все удовлетворяют хотя бы одному из условий
    {
        $query = DB::table('employees')->where(function ($query) {
            $query->where('salary', '>=', 400)
                ->where('salary', '<=', 800)
                ->orWhere('position', 'программист');
        })
            ->get();
        foreach ($query as $post) {
            echo '<p><strong> Пользователь </strong>ID: ' . $post->id . '</p>';
            echo '<p> Имя: ' . $post->name . '</p>';
            echo '<p> Дата рождения: ' . $post->birthday . '</p>';
            echo '<p> Должность: ' . $post->position . '</p>';
            echo '<p> Зарплата: ' . $post->salary . '</p>';
        }
    }
    public function zadanie7()
    {
        $query = DB::table('employees')->get('salary');
        $sum = 0;
        foreach ($query as $post) {
            $sum += $post->salary;
        }
        echo '<p> Суммарная зарплата всех работников: ' . $sum;
    }
    public function zadanie8()
    {
        $query = DB::table('employees')
            ->select('position', DB::raw('SUM(salary) as total_salary'))
            ->groupBy('position')
            ->get();
        foreach ($query as $row) {
            echo "<strong>Должность:</strong> " . $row->position . "<strong> Зарплата: </strong>" . $row->total_salary . "<br/>";
        }
    }
    public function zadanie9()
    {
        $query = DB::table('employees')
            ->select('*')
            ->whereRaw('DAY(birthday) = 25')
            ->get();
        foreach ($query as $post) {
            echo '<p><strong> Пользователь </strong>ID: ' . $post->id . '</p>';
            echo '<p> Имя: ' . $post->name . '</p>';
            echo '<p> Дата рождения: ' . $post->birthday . '</p>';
            echo '<p> Должность: ' . $post->position . '</p>';
            echo '<p> Зарплата: ' . $post->salary . '</p>';
        }
    }
    public function zadanie10()
    {
        $query = DB::table('employees')
            ->select('*')
            ->whereRaw('YEAR(birthday) = 1990')
            ->get();
        foreach ($query as $post) {
            echo '<p><strong> Пользователь </strong>ID: ' . $post->id . '</p>';
            echo '<p> Имя: ' . $post->name . '</p>';
            echo '<p> Дата рождения: ' . $post->birthday . '</p>';
            echo '<p> Должность: ' . $post->position . '</p>';
            echo '<p> Зарплата: ' . $post->salary . '</p>';
        }
    }
    public function nomer13_2_2()
    {
        DB::table('users')->insert([
            [
                'login'  => Str::random(10),
                'password'  => Hash::make('10'),
                'email'  => Str::random(7) . '@gmail.com',
            ],

        ]);
        echo '<p> Задание 2 выполнено. Новый юзер добавлен в таблицу</p>';
        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    public function nomer13_2_3()
    {
        for ($i = 0; $i < 3; $i++) {
            DB::table('users')->insert([
                'login'  => Str::random(10),
                'password'  => Hash::make('10'),
                'email'  => Str::random(7) . '@gmail.com',
            ]);
        }
        echo '<p> Задание 3 выполнено. 3 новых юзера добавлено в таблицу</p>';
        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    public function nomer13_2_4()
    {
        echo '<p> Исходная таблица </p>';

        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        DB::table('users')->where('id', 1)->update([
            'login'  => Str::random(10),
            'password'  => Hash::make('10'),
            'email'  => Str::random(7) . '@gmail.com',
        ]);

        echo '<p> Задание 4 выполнено. Информация юзера была обновлена</p>';
        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    public function nomer13_2_5()
    {
        echo '<p> Исходная таблица </p>';

        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
        DB::table('users')
            ->where('id', 5)
            ->delete();

        echo '<p> Задание 5 выполнено. Один юзер был удален</p>';
        $employees = DB::table('users')->get();
        // Выводим данные в виде таблицы
        echo '<table border="1">';
        echo '<tr><th>ID</th><th>Lodin</th><th>Password</th><th>Email</th></tr>';
        foreach ($employees as $employee) {
            echo '<tr>';
            echo '<td>' . $employee->id . '</td>';
            echo '<td>' . $employee->login . '</td>';
            echo '<td>' . $employee->password . '</td>';
            echo '<td>' . $employee->email . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }

    public function getAll($order = 'date', $dir = 'desc')
    {
        if ($order == 'date') {
            $order = 'created_at';
        }
        // $post=Post::all();
        $posts = Post::orderBy($order, $dir)->get();
        // $posts=Post::latest()->get();
        return view('index', ['posts' => $posts]);
    }

    public function getOne($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return view('404');
        }
        return view('show', ['post' => $post]);
    }

    public function newPost(Request $request)
    {
        Post::create($request->all());
        return redirect('/post/all');
    }

    public function editPost(Request $request, $id)
    {
        $post = Post::find($id);
        if ($request->method() == 'POST') {
            $post->title = $request->title;
            $post->desc = $request->desc;
            $post->text = $request->text;
            $post->save(); //сохраним модель
            return redirect('/post/all');
        }
        return view('editPost', ['post' => $post]);
    }
    public function delPost($id)
    {
        $post = Post::find($id);
	    $post->delete();
        return redirect('/post/all');
    }
}
