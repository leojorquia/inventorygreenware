<?php
	include 'header.php';
?>
<div class="row scrollable-container">
<div class="container-fluid">
	<div class="card">
	  <div class="card-body">
	    <h5 class="card-title fw-semibold mb-4">Sales</h5>
    	<div class="col-lg-12 d-flex align-items-stretch">
		    <div class="card w-100">
		      <div class="card-body">
		        <div class="table-responsive">
		          <table class="table text-nowrap mb-0 align-middle">
		            <thead class="text-dark">
		              <tr>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Id</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Products</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Qty</h6>
		                </th>
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Date</h6>
		                </th>		                
		                <th class="border-bottom-0">
		                  <h6 class="fw-semibold mb-0">Action</h6>
		                </th>
		              </tr>
		            </thead>
		            <tbody>

		              <tr>
		                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
		                <td class="border-bottom-0">
		                    <span class="fw-normal">Laptop</span>                          
		                </td>
		                <td class="border-bottom-0">
		                  <p class="mb-0 fw-normal">5pcs</p>
		                </td>	
		                <td class="border-bottom-0">
		                  <p class="mb-0 fw-normal">Feb-13-2024</p>
		                </td>		              	
		                <td class="border-bottom-0">
		                  <button class="badge btn bg-primary rounded-3 fw-semibold">Edit</button>
		                  <button class="badge btn bg-danger rounded-3 fw-semibold">Delete</button>
		                </td>
		              </tr>

		              <tr>
		                <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
		                <td class="border-bottom-0">                    
		                    <span class="fw-normal">Smart Phone</span>                          
		                </td>
		                <td class="border-bottom-0">
		                  <p class="mb-0 fw-normal">10pcs</p>
		                </td>		              
		                <td class="border-bottom-0">
		                  <p class="mb-0 fw-normal">Feb-13-2024</p>
		                </td>		    
		                <td class="border-bottom-0">
		                  <button class="badge btn bg-primary rounded-3 fw-semibold">Edit</button>
		                  <button class="badge btn bg-danger rounded-3 fw-semibold">Delete</button>
		                </td>
		                  <form method="post" action="../navigate.php">
                      <td class="border-bottom-0">
                          <a class="btn btn-primary" href="Edit-sale.php?sale_id=<?=$sale_id;?>" style=" color: white;">Update</a>
                          <input type="hidden" name="sale_id" value="<?=$sale_id;?>">
                          <button class="btn btn-info" type="submit" name="btn-delete-sale">Delete</button>
                      </td>
                      </form>
		              </tr>

		            </tbody>
		          </table>
		        </div>
		      </div>
		    </div>
	    </div>
	  </div>
	</div>
</div>


   <?php
   	include 'footer.php';
   ?>
   <script>
  // JavaScript function for table filtering
  function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (var j = 0; j < td.length; j++) {
        var cell = td[j];
        if (cell) {
          txtValue = cell.textContent || cell.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
            break;
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  }

  // Add event listener to trigger the search function when the user types in the search input
  document.getElementById("searchInput").addEventListener("input", searchTable);
</script>
