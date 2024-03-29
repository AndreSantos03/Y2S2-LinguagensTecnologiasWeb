<?php
  declare(strict_types = 1);

  require_once(__DIR__ . '/../utils/session.php');
  $session = new Session();

  require_once(__DIR__ . '/../database/connection.db.php');
  require_once(__DIR__ . '/../database/ticket.class.php');
  require_once(__DIR__ . '/../database/user.class.php');

  $db = getDatabaseConnection();
  $active = $_GET['active'];
  $closed = $_GET['closed'];
  $recent = $_GET['recent'];
  $search = $_GET['search'];
  $user_id = $session->getId();
  $user_privilege = User::privilegeFromId($db, $user_id);
  if ($user_privilege == 'Client') {
    $tickets = Ticket::getClientTickets($db, $user_id,$search,$active,$closed,$recent);
  } else if($user_privilege == 'Agent') {
    $tickets = Ticket::getAgentTickets($db, $user_id,$search,$active,$closed,$recent);
  } else if($user_privilege == 'Admin') {
    $tickets = Ticket::getAdminTickets($db, $user_id,$search,$active,$closed,$recent);
  }
  echo json_encode($tickets);
?>