<?php
defined('BASEPATH') or exit('No direct script access allowed');
class data extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    protected $table = 'data';

    public function getHashedPassword($email)
    {
        // Retrieve the hashed password from the database based on the email
        $query = $this->db->select('password')->where('email', $email)->get('users');
        $result = $query->row();
        return $result ? $result->password : null;
    }

    public function saveUser($email, $hashedPassword, $level)
    {
        // Save the email and hashed password to the database
        $data = array(
            'email' => $email,
            'password' => $hashedPassword,
            'level' => $level
        );
        $this->db->insert('users', $data);
    }
    public function save($data)
    {
        $this->db->trans_start();
        $this->db->insert('data', $data);
        $this->db->trans_commit();
        // return $this->db->insert_id();
    }

    public function verifikasi($data)
    {
        $this->db->trans_start();
        $this->db->insert('users', $data);
        $this->db->trans_commit();
    }

    public function createUser($username, $password)
    {
        // Check if the username already exists in the database
        $existingUser = $this->db->where('email', $username)->get('users')->row();

        if ($existingUser) {
            // Username already registered
            return false;
        }

        // Create the new user account
        $userData = array(
            'email' => $username,
            'password' => $password
        );

        $this->db->insert('users', $userData);
        $userId = $this->db->insert_id();

        if ($userId) {
            // Return the created user data
            $user = $this->db->where('email', $userId)->get('users')->row();
            return $user;
        } else {
            // Failed to create user
            return false;
        }
    }
    public function emptyDatabase()
    {
        // Perform the necessary operations to empty the database
        $this->db->empty_table('data');
        // Repeat the above line for other tables if needed
    }

    public function validateUser($username, $password)
    {
        // Check if the username and password match a record in the database
        $user = $this->db->where('email', $username)
            ->where('password', $password)
            ->get('users')
            ->row();

        if ($user) {
            // Return the user data
            return $user;
        } else {
            // Invalid credentials
            return false;
        }
    }

    public function getColumnCounts()
    {
        $columns = array(
            'jk',
            'usia',
            'domisili',
            'statusrumah',
            'pendidikan',
            'divisi',
            'durasi',
            'perkawinan',
            'kendaraan',
            'hobi',
            'pert1',
            'pert2',
            'pert3',
            'pert4',
            'pert5',
            'pert6',
            'pert7',
            'pert8',
            'pert9',
            'pert10',
            'pert11',
            'pert12',
            'pert13',
            'pert14',
            'pert15',
            'pert16',
            'pert17',
            'pert18',
            'pert19',
        );

        $results = array();

        foreach ($columns as $column) {
            $this->db->select("$column, COUNT(*) AS count_$column");
            $this->db->group_by($column);
            $query = $this->db->get($this->table);

            $results[$column] = $query->result();
        }

        return $results;
    }

    public function getLevel($email)
    {
        $this->db->select('level');
        $this->db->where('email', $email);
        $query = $this->db->get('users');
        return $query->row()->level;
    }
}
