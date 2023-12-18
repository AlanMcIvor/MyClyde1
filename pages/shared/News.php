<?php include '../../partials/header.php'; ?>
<?php include '../../config/config.php'; ?>
<?php include '../../queries/newsQuery.php'; ?>

    <!-- component -->


<div class=" mx-auto lg:max-w-7xl mt-3 ">  
     <?php while ($news->fetch()): ?>
	<div class="max-w-7xl mx-auto px-5 mb-3">
                <h3 class="text-gray-700 text-2xl font-medium">News</h3>
  
		<div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
			<div
				class="max-w-xl bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
					
  		<div class="p-5">

					    <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80')">
                        
                    </div>

							<h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?= $title ?></h5>
						</a>
						<p class="mb-3 font-normal text-gray-700 dark:text-gray-400"><?= $description ?></p>
						<a href="#"
							class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
							Read more
							<svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
								xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
									d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
									clip-rule="evenodd"></path>
							</svg>
						</a>
                                                  
					</div>
                     
                   
			</div>
            

		</div>
        
	</div>
    
</div>
       <?php endwhile ?>
<?php include '../../partials/footer.php'; ?>
