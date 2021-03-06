
<? include("./template/navigation.php"); ?>
<? include("./template/header.php"); ?>


<!-- INSÉRER SON CONTENU DANS LE MAIN -->
<main class="w-full flex-grow p-6">
<h1 class="text-4xl text-black mb-10">Effectif total</h1>
    <!-- Big container -->
    <div class="text-blueGray-700 antialiased">
        
        <!-- Smaller container -->
        <div class="px-4 md:px-10 mx-auto w-full">

            <!-- Cards -->
            
            <div class="flex flex-wrap justify-around">
            
               <? foreach($staff as $staff): ?>

                <div class="w-full lg:w-6/12 xl:w-3/12 px-4 mb-8 mr-8">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg w-72">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        <?= $staff->getFirstname() ?>
                                    </h5>
                                    <h5 class="font-semibold text-xl text-blueGray-700">
                                        <?= $staff->getLastname() ?>
                                    </h5>
                                    <span class="text-blueGray-400 uppercase font-bold text-xs">
                                        <?= $staff->getPost() ?>
                                    </span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500 bg-auto"
                                        style="background-image: url(<?= $staff->getAvatar() ?>)">
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <? endforeach ?>

            </div>

        </div>
    
    
    
    </div>

</main>

<? include("./template/footer.php");?>
