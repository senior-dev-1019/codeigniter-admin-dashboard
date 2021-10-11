<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar extends CI_Controller
{

    public function __construct() {
        Parent::__construct();
        $this->load->model("calendar_model");
    }

    public function index()
    {
      $this->load->view("calendar/index.php", array());
    }

    public function get_events()
    {
        // Our Stand and End Dates
        $start = $this->input->get("start");
        $end = $this->input->get("end");

        $startdt = new DateTime('now'); // setup a local datetime
        $startdt->setTimestamp($start); // Set the date based on timestamp
        $format = $startdt->format('Y-m-d H:i:s');

        $enddt = new DateTime('now'); // setup a local datetime
        $enddt->setTimestamp($end); // Set the date based on timestamp
        $format2 = $enddt->format('Y-m-d H:i:s');

        $events = $this->calendar_model->get_events($format,
            $format2);

        $data_events = array();

        foreach($events->result() as $r) {

            $data_events[] = array(
                "id" => $r->ID,
                "client" => $r->client,
                "title" => $r->title,
                "end" => $r->end,
                "start" => $r->start
            );
        }

        echo json_encode(array("events" => $data_events));
        exit();
    }

    public function add_event()
    {
        /* Our calendar data */
        $name = $this->input->post("name");
        $user = $this->input->post("user");
        $client = $this->input->post("client");
        $start_date = $this->input->post("start_date");
        $end_date = $this->input->post("end_date");

        if(!empty($start_date)) {
            $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
            $start_date = $sd->format('Y-m-d H:i:s');
            $start_date_timestamp = $sd->getTimestamp();
        } else {
            $start_date = date("Y-m-d H:i:s", time());
            $start_date_timestamp = time();
        }

        if(!empty($end_date)) {
            $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
            $end_date = $ed->format('Y-m-d H:i:s');
            $end_date_timestamp = $ed->getTimestamp();
        } else {
            $end_date = date("Y-m-d H:i:s", time());
            $end_date_timestamp = time();
        }

        $this->calendar_model->add_event(array(
            "title" => $name,
            "user" => $user,
            "client" => $client,
            "start" => $start_date,
            "end" => $end_date
            )
        );

         $this->calendar_model->create_client_task($data);

         $athbi = $this->db->insert_id();

         //Redirect with last_id
   			 redirect("tasks/".$athbi);
    }


    public function edit_event()
    {
        $eventid = intval($this->input->post("eventid"));
        $event = $this->calendar_model->get_event($eventid);
        if($event->num_rows() == 0) {
            echo"Invalid Event";
            exit();
        }

        $event->row();

        /* Our calendar data */
        $name = $this->input->post("name");
        $client = $this->input->post("client");
        $start_date = $this->input->post("start_date");
        $end_date = $this->input->post("end_date");
        $delete = intval($this->input->post("delete"));

        if(!$delete) {

            if(!empty($start_date)) {
                $sd = DateTime::createFromFormat("Y/m/d H:i", $start_date);
                $start_date = $sd->format('Y-m-d H:i:s');
                $start_date_timestamp = $sd->getTimestamp();
            } else {
                $start_date = date("Y-m-d H:i:s", time());
                $start_date_timestamp = time();
            }

            if(!empty($end_date)) {
                $ed = DateTime::createFromFormat("Y/m/d H:i", $end_date);
                $end_date = $ed->format('Y-m-d H:i:s');
                $end_date_timestamp = $ed->getTimestamp();
            } else {
                $end_date = date("Y-m-d H:i:s", time());
                $end_date_timestamp = time();
            }

            $this->calendar_model->update_event($eventid, array(
                "title" => $name,
                "start" => $start_date,
                "end" => $end_date,
                )
            );

        } else {
            $this->calendar_model->delete_event($eventid);
        }

        redirect(site_url("calendar"));
    }

}

?>
