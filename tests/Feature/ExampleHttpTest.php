public function testUserCreationEndpointTest()
{
    $name = $this->faker->name();
    $email = $this->faker->email();
    $password = "mypassword";

    $response = $this->postJson('/api/createuser', [
        'name' => $name, 
        'email' => $email,
        'password' => $password,
        'password_confirmation' => $password
    ]); 

    $response
        ->assertStatus(201)
        ->assertExactJson([
            'message' => "Successfully created user!",
        ]);
}