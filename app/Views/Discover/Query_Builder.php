<?= $this->extend('layout/master') ?>
<?= $this->section('content') ?>
<div class="row">
	<div class="col">
		<h2><?= $title ?></h2>
	</div>
</div>
<hr>
<?php if($message): ?>
	<div class="row">
		<div class="col">
			<div class="alert alert-info">
			<?php echo $message ?>
			</div>
		</div>
	</div>
<?php endif; ?>
<div class="row" id="timeoutalert" style="display:none;">
		<div class="col">
			<div class="alert alert-warning">
			Your session has timed out. You need to log in again. Please click <a href="<?= base_url('Auth/Login') ?>">here to log in</a>.
			</div>
		</div>
	</div>
<div class="row mb-2">
    <div class="col">
        <div class="card border-secondary">
            <h5 class="card-header border-secondary">Subject</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-4">Gender:</div>
                    <div class="col-6">
                        <span>
                        <label for="genmale">Male</label>
                        <input type="radio" name="gender" id="genmale" value="genmale">
                        </span>
                        <span>
                        <label for="genfemale">Female</label>
                        <input type="radio" name="gender" id="genfemale"  value="genfemale">
                        </span>
                        <span>
                        <label for="genany">Any</label>
                        <input type="radio" name="gender" id="genany" checked>
                        </span>
                    </div>
                    <div class="col-2"></div>
                </div>
                <div class="row">
                    <div class="col">Age:</div>
                    <div class="col">
                        <div id="age-range" class="mt-2"></div>
                    </div>
                    <div class="col">
                        <input type="text" id="age-value" readonly style="border:0; font-weight:bold;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">Age at Diagnosis:</div>
                    <div class="col">
                        <div id="age-diagnosis-range" class="mt-2"></div>
                    </div>
                    <div class="col">
                        <input type="text" id="age-diagnosis-value" readonly style="border:0; font-weight:bold;">
                    </div>
                </div>
                <div class="row">
                    <div class="col">Age when First Symptoms Appeared:</div>
                    <div class="col">
                        <div id="age-first-symptoms-range" class="mt-2"></div>
                    </div>
                    <div class="col">
                        <input type="text" id="age-first-symptoms-value" readonly style="border:0; font-weight:bold;">
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col">
        <div class="card border-secondary">
            <h5 class="card-header border-secondary">HPO</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                            <input class="form-control" id="search_filter_phen_left" type="text" placeholder="filter by keyword" style="text-align: center;" />
                        </div>
                        <select id='values_phen_left' class="form-control" size="10"></select>
                        <button class="btnAdd btn btn-secondary btn-block">Add</button>
                    </div>
                    <div class="col">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                            <input class="form-control" id="search_filter_phen_right" type="text" placeholder="filter by keyword" style="text-align: center;">
                        </div>
                        <select id="values_phen_right" class="form-control" size="10"></select>
                        <button class="btnRemove btn btn-secondary btn-block">Remove</button>
                    </div>
                </div>
                <hr/>
                <div class="row mb-3">
                    <div class="col-4">HPO Term Pairwise Similarity:</div>
                    <div class="col-2 text-right">
                        Minimum
                    </div>
                    <div class="col-4">
                        <div id="similarity-rel-range" class="mt-2">
                            <div id="srr-handle" class="ui-slider-handle"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        Exact
                    </div>                 
                </div>
                <div class="row mb-3">
                    <div class="col">Minimum Matched Terms:</div>
                    <div class="col-2 text-right">
                        Any
                    </div>
                    <div class="col">
                        <div id="similarity-range" class="mt-2">
                            <div id="sr-handle" class="ui-slider-handle"></div>
                        </div>
                    </div> 
                    <div class="col-2">
                        All
                    </div>                 
                </div> 
                <div class="row mb-3">
                    <div class="col-5">
                        Include ORPHA:
                    </div>
                    <div class="col-5">
                        <input type="checkbox" class="custom-control-input" id="includeORPHA" checked>
                        <label class="custom-control-label" for="includeORPHA"></label>
                    </div>
                </div>                         
            </div>
        </div>
    </div>
</div>

<!-- ORDO -->

<div class="row mb-2">
    <div class="col">
        <div class="card border-secondary">
            <h5 class="card-header border-secondary">ORDO</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-1 pt-2"> ORDO:</div>
                    <div class="col-11">
                            <select class=" form-control" multiple="multiple" tabindex="-1" id="ordoSelect">
                            <option></option>
                        </select>
                    </div>
                </div>
                <hr/>
                <div class="row mb-3">
                    <div class="col-4">HPO Term Pairwise Similarity:</div>
                    <div class="col-2 text-right">
                        Minimum
                    </div>
                    <div class="col-4">
                        <div id="similarity-rel-range-ordo" class="mt-2">
                            <div id="srr-handle" class="ui-slider-handle"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        Exact
                    </div>                 
                </div>
                <hr/>
                <div class="row mb-3">
                    <div class="col-4">ORDO Match Scale</div>
                    <div class="col-2 text-right">
                        Minimum
                    </div>
                    <div class="col-4">
                        <div id="match-scale-ordo" class="mt-2">
                            <div id="srr-handle" class="ui-slider-handle"></div>
                        </div>
                    </div>
                    <div class="col-2">
                        Exact
                    </div>                 
                </div>
                <hr/>
                <div class="row mb-3">
                    <div class="col-5">
                        Include HPO:
                    </div>
                    <div class="col-5">
                        <input type="checkbox" class="custom-control-input" id="includeHPO">
                        <label class="custom-control-label" for="includeHPO"></label>
                    </div>
                </div>                  
            </div>
        </div>
    </div>
</div>


<input type="hidden" value="<?php echo $network_key;?>" id="network_key"/>
<input type="hidden" value="<?php echo $user_id;?>" id="user_id"/>
<input type="hidden" id="csrf_token" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />

<div class="row" id="reset_buildQuery">
    <div class="col">
        <a class="btn btn-lg btn-primary<?= ($elasticSearchEnabled ? "" : " disabled"); ?>" id="build_query"><i class="fa fa-search"></i> Build Query</a>
        <a class="btn btn-secondary  btn-lg" id="reset_query"><i class="fa fa-trash"></i> Reset</a>
    </div>
    <div class="col">
        <div class="spinner-border text-danger" role="status" id="waiting" style="text-align: center;display:none;">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
</div>

<hr/>
<!-- Loader -->

<!-- <div id="waiting" style="text-align: center;display:none;">
<br />Searching...<br />
<img src="<?php echo base_url("resources/images/loading.gif");   ?>" title="Loader" alt="Loader" />
</div> -->

<!-- Result Table -->
<table id="query_result" class="table table-hover table-bordered table-striped" style="display:none;">
    <thead>
        <tr>
            <th>Source</th>
            <th>Counts</th>
			<th>Source Details</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- Full Screen HPO Tree Modal -->
<div class="modal fade" id="hpoTreeModal" tabindex="-1" role="dialog" aria-labelledby="hpoTreeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HPO Tree</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="jstreeArea">

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Result Modal -->
<div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="resultModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resultModalLabel">Results</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="row">
			  <div class="col text-center">
				  <div class="spinner-grow text-info" role="status" style="width: 5rem; height: 5rem; display:none" id="loader">
					  <span class="sr-only">Loading...</span>
				  </div>
			  </div>
		  </div>
        <table class="table table-hover table-stripped table-bordered" id="resTbl">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Subject ID</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Source Modal -->
<div class="modal fade" id="sourceModal" tabindex="-1" role="dialog" aria-labelledby="sourceModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="sourceModalLabel">Source Information</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-6">
						<b>Source Name</b>
					</div>
					<div class="col-6">
						<b>Owner Name</b>
					</div>
				</div>
				<div class="row">
					<div class="col-6" id="source_name">

					</div>
					<div class="col-6" id="source_owner">

					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<b>Owner Email</b>
					</div>
					<div class="col-6">
						<b>Source URL</b>
					</div>
				</div>
				<div class="row">
					<div class="col-6" id="source_owner_email">

					</div>
					<div class="col-6" id="source_uri">

					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<b>Short Description</b>
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="source_description">

					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<b>Full Description</b>
					</div>
				</div>
				<div class="row">
					<div class="col-12" id="source_long_description">

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?= $this->endSection() ?>
