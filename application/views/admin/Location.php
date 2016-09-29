
                <div class="page-body" ng-app="myApp" ng-controller="FormController">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-xs-12">
                            <div class="widget">
                            <div class="widget-header bg-blue">
                                <i class="widget-icon fa fa-arrow-left"></i>
                                <span class="widget-caption">Colored Header</span>
                                <div class="widget-buttons">
                                    <a data-toggle="config" href="#">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a data-toggle="maximize" href="#">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a data-toggle="collapse" href="#">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                    <a data-toggle="dispose" href="#">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div><!--Widget Buttons-->
                            </div><!--Widget Header-->
                            <div class="widget-body">
                                <?php if($type=="new"){?>
                                  <form class="form-inline" ng-submit="submitForm()" role="form" method="post">
                                    <div class="form-group">
                                        <input id="definput" class="form-control" type="text" ng-model="location" name="location" placeholder="location">
                                        <input id="added_type" type="hidden" ng-model="added_type" name="added_type">
                                    </div>
                                    <div class="form-group">
                                        <label class="pull-right margin-top-10">
                                            <input id="active_yn" class="checkbox-slider slider-icon colored-primary" type="checkbox" ng-model="active_yn.value1" ng-true-value="Y" ng-false-value="N">
                                            <span class="text"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button><hr>
                                </form>
                                <?php } ?>
                                <div class="form-group" >
                                    <table class="table table-striped table-hover table-bordered" id="editabledatatable">
                                        <thead>
                                            <tr>
                                                <td>Location</td>
                                                <?php if($type=="request"){ ?>
                                                <td>Email</td>
                                                <?php } ?>
                                                <td>Status</td>
                                                <?php if($type!="all"){ ?>
                                                <td>Action</td>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr ng-repeat="data in names"> 
                                                <td>
                                                    {{data.location}}
                                                </td>
                                                <?php if($type=="request"){ ?>
                                                <td>
                                                    {{data.email}}
                                                </td>
                                                <?php } ?>
                                                
                                                <td>
                                                    {{data.active_yn}}
                                                </td>
                                                <?php if($type!="all"){ ?>
                                                <td>
                                                    <a href="#" data-toggle="modal" ng-click="editloc(data.id,$index)" class="btn btn-info btn-xs edit"><i class="fa fa-edit"></i> Edit</a>
                                                    <a href="#" ng-click="deleteloc(data.location,$index)" class="btn btn-danger btn-xs delete"><i class="fa fa-trash-o"></i> Delete</a>
                                                    <!--<button type="button" class="btn btn-info shiny" ng-click="deleteloc(data.location,$index)"><i class="fa fa-times" style="color: #B82525"></i></button>-->
                                                </td>
                                                <?php } ?>
                                            </tr>
                                        </tbody>
                                    </table>
    
                                     <div class="modal fade bs-example-modal-sm" id="adminEditModel"tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                    
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title" id="mySmallModalLabel">Small modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="widget-body">
                                                                <div id="fromUpdate">
                                                                     <form class="form-inline" ng-submit="updateForm()" role="form" method="post">
                                                                        <div class="form-group">
                                                                            <input id="definput" class="form-control" type="text" ng-model="location1" name="location1" placeholder="location">
                                                                            <input id="id" type="hidden" ng-model="id" name="id">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="pull-right margin-top-10">
                                                                                <input id="active_yn1" class="checkbox-slider slider-icon colored-primary" type="checkbox" ng-model="active_yn2.value2" ng-true-value="Y" ng-false-value="N">
                                                                                <span class="text"></span>
                                                                            </label>
                                                                        </div>
                                                                        
                                                                        <button type="submit" class="btn btn-primary">Save</button><hr>
                                                                    </form>
                                                                </div>
                                                              </div>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div><!--Widget Body-->
                        </div>
                    </div>
                </div>
                <!-- /Page Body -->
            </div>
            <!-- /Page Content -->
        </div>
       
        <!-- /Page Container -->
        <!-- Main Container -->
    </div>
</body>
</html>
<script>
    //alert("");
    var App = angular.module('myApp', []);
    function FormController($scope, $http) {
        $scope.names=[];
        //$scope.editlocation=true;
        //$scope.viewlocation=false;
        $scope.getLocation=function(){
            $http.post('<?php echo site_url('WashControl/get_list/'.$type); ?>').success(function($data)
            {
            $scope.names=$data;
            });
        }
        $scope.getLocation();
        //get end
        //save data to database
        $scope.location = undefined;
        $scope.submitForm = function ()
        {
        console.log("posting data....");
        $http({
        method: 'POST',
        url: '<?php echo base_url(); ?>WashControl/add',
        headers: {'Content-Type': 'application/json'},
        data: JSON.stringify({location: $scope.location,active_yn:$scope.active_yn.value1})
        }).success(function(data, status, headers, config){
        $scope.getLocation();

        //$scope.message = data.status;
        });
        }
        //detele option
        $scope.deleteloc = function (location,index) { 
        //alert(location);
        $http({ method: 'post',
                url: "<?php echo base_url('WashControl/del_location'); ?>",
                headers: {'Content-Type': 'application/json'},
                data: JSON.stringify({location: location})
        }).success(function(location){
                    $scope.names.splice(index, 1);
        });
        }
        $scope.editloc = function (id,index) {
            $http({ method: 'post',
                    url: "<?php echo base_url('WashControl/edit_location'); ?>",
                    headers: {'Content-Type': 'application/json'},
                    data: JSON.stringify({location: id})
            }).success(function(data, status, headers, config){
                $scope.location1=data[0].location;
                //$scope.active_yn1=data[0].active_yn;
                $scope.id=data[0].id;
                $("#adminEditModel").modal('show');
            });
            }
            $scope.updateForm = function () {
            $http({ method: 'post',
                    url: "<?php echo base_url('WashControl/Update_location'); ?>",
                    headers: {'Content-Type': 'application/json'},
                    data: JSON.stringify({id:$scope.id,location:$scope.location1,active_yn:$scope.active_yn2.value2})
            }).success(function(data, status, headers, config){
                $scope.getLocation();
                $("#adminEditModel").modal('hide');
            });
            }
        $scope.active_yn = {
           value1 : 'Y'
         };
         $scope.active_yn2 = {
           value2 : 'Y'
         };
    }
</script>
