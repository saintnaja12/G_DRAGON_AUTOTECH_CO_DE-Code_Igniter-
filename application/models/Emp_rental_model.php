<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp_rental_model extends CI_Model 
{
    public function show_rental()
    {
        // $query = $this->db->get('Carregis');
        
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');

        $query = $this->db->get();

        return $query->result();
        
    }

    public function read_rental($idRental)
    {
        $this->db->select('*');
        $this->db->from('Rental');
        $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
        $this->db->join('Carregis', 'RentalDetail.idCarregis = Carregis.idCarregis');
        $this->db->join('Member', 'Rental.idMember = Member.id_Member');
        $this->db->join('Status_car', 'Rental.idstatus = Status_car.id_Status');
        // $this->db->join('Images3', 'Rental.idRental = Images3.idrent');

        $this->db->where('idRental', $idRental);
        $query = $this->db->get();

        if ($query->num_rows() > 0) 
        {
            $data = $query->row();
            return $data;
        }
       return FALSE;
    }

    public function add_status()
    {
        // print_r($_POST);
        
        // exit;

        $this->db->where('idRental', $this->input->post('idRental'));
       
        $data = array( 
            'id_Employee' => $this->session->userdata('id_Employee'),
            'idstatus' => $this->input->post('idstatus'),
        );

        $query=$this->db->update('Rental',$data);

        $this->db->order_by('idRental', 'desc');
        $query_2 =  $this->db->get('Rental', 1);
        $qq = $query_2->row_array();

        if($qq['idstatus'] == '3')
        {
            
            redirect('Emp_rental/not_passed_rent/'.$qq['idRental']);
            
        }
        else 
        {
            
            echo "<script>";
            echo "alert('แก้ไขสถานะเรียบร้อย');";
            echo "window.location.href = '". base_url(). "Emp_rental';";
            echo "</script>";
        }
        // redirect('Manager_emp');
    }

    public function add_not_passed_rent()
    {
        $data = array( 
            'Name_not_rent' => $this->input->post('Name_not_rent'),
            'idRental' => $this->input->post('idRental')
        );

        $query=$this->db->insert('Not_passed_rent',$data);

        echo "<script>";
        echo "alert('บันทึกหมายเหตุเรียบร้อย');";
        echo "window.location.href = '". base_url(). "Emp_rental';";
        echo "</script>";
    }
}
?>