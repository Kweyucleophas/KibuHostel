<!-- List of pending users -->
<h2>Pending Users</h2>
<table>
  <tr>
    <th>Name</th>
    <th>Admission No</th>
    <th>Hostel</th>
    <th>Room No</th>
    <th>Action</th>
  </tr>
  <tr>
    <td>John Doe</td>
    <td>AB1234</td>
    <td>Hostel A</td>
    <td>101</td>
    <td>
      <form method="post" action="approve_user.php">
        <input type="hidden" name="admission_no" value="AB1234">
        <input type="submit" value="Approve">
      </form>
      <form method="post" action="reject_user.php">
        <input type="hidden" name="admission_no" value="AB1234">
        <input type="submit" value="Reject">
      </form>
    </td>
  </tr>
  <tr>
    <td>Jane Doe</td>
    <td>CD5678</td>
    <td>Hostel B</td>
    <td>202</td>
    <td>
      <form method="post" action="approve_user.php">
        <input type="hidden" name="admission_no" value="CD5678">
        <input type="submit" value="Approve">
      </form>
      <form method="post" action="reject_user.php">
        <input type="hidden" name="admission_no" value="CD5678">
        <input type="submit" value="Reject">
      </form>
    </td>
  </tr>
</table>
