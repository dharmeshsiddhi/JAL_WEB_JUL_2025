@extends("layout.app") 
@section('inlineStyle')
@endsection
@section("page")
    <section class="section-notifications">
        <div class="section__title">
            <h2 class="section__titletext" style="color: rgb(10, 36, 99);">Screen Reader</h2>
            <hr class="section__titlehr" style="background-color: rgb(10, 36, 99);">
        </div>
        <div class="row mx-0">
            <div class="col-md-1"></div>
            <div class="col-md-10" style=overflow-x:auto;"">
                <p style="text-align:justify;line-height:30px;">
                <span style="font-weight:400;line-height:80%;">This will enable people with visual impairments access the website using technologies, such as screen readers. The information of the website is accessible with different screen readers, such as JAWS, NVDA, SAFA, Supernova and Window-Eyes. 

                </br>Following table lists the information about different screen readers:
                
                </br>Information related to the various screen readers</span>
                </p>
                                
                <table class="table table-hover table-bordered table-responsive-md mt-10">
                    <thead>
                        <tr>
                            <th scope="col" width="30%">Screen Reader</th>
                            <th scope="col" width="50%">Website</th>
                            <th scope="col" width="20%">Free Commercial</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="v-center">Non Visual Desktop Access (NVDA)	</td>
                            <td class="v-center"><a href="http://www.nvda-project.org/" class="external" target="_blank"> http://www.nvda-project.org/ </a>   </td>
                            <td class="v-center">Free</td>
                        </tr>
                         <tr>
                            <td class="v-center">System Access To Go		</td>
                            <td class="v-center"><a href="http://www.satogo.com/" class="external" target="_blank"> http://www.satogo.com/ </a>   </td>
                            <td class="v-center">Free</td>
                        </tr>
                         <tr>
                            <td class="v-center">Web Anywhere		</td>
                            <td class="v-center"><a href="http://webanywhere.cs.washington.edu/wa.php" class="external" target="_blank"> http://webanywhere.cs.washington.edu/wa.php </a>   </td>
                            <td class="v-center">Free</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
