<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyCalendar extends CI_Controller {

  function display($year = null, $month = null){

      $this->load->model('MyCalendar_model');
      $data['calendar'] = $this->MyCalendar_model->generate($year, $month);

      $this->load->view('pages/MyCalendar', $data);
  }
}
?>
