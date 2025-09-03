use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Donor
        User::create([
            'name' => 'Donor One',
            'email' => 'donor1@gmail.com',
            'password' => Hash::make('pass1234'),
            'role' => 'donor',
        ]);

        // Healthcare worker
        User::create([
            'name' => 'Healthcare Worker One',
            'email' => 'hcworker1@gmail.com',
            'password' => Hash::make('pass1234'),
            'role' => 'healthcare',
        ]);
    }
}
