<!-- <div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body">
                <div class="fs-4 fw-semibold">89.9%</div>
                <div>Widget title</div>
                <div class="progress progress-thin my-2">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body">
                <div class="fs-4 fw-semibold">12.124</div>
                <div>Widget title</div>
                <div class="progress progress-thin my-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body">
                <div class="fs-4 fw-semibold">$98.111,00</div>
                <div>Widget title</div>
                <div class="progress progress-thin my-2">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body">
                <div class="fs-4 fw-semibold">2 TB</div>
                <div>Widget title</div>
                <div class="progress progress-thin my-2">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis">Widget helper text</small>
            </div>
        </div>
    </div>
</div> -->


<!-- 
<div class="row">
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-primary">
            <div class="card-body">
                <div class="fs-4 fw-semibold">89.9%</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-thin my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-warning">
            <div class="card-body">
                <div class="fs-4 fw-semibold">12.124</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-thin my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-danger">
            <div class="card-body">
                <div class="fs-4 fw-semibold">$98.111,00</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-thin my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="card mb-4 text-white bg-info">
            <div class="card-body">
                <div class="fs-4 fw-semibold">2 TB</div>
                <div>Widget title</div>
                <div class="progress progress-white progress-thin my-2">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div><small class="text-medium-emphasis-inverse">Widget helper text</small>
            </div>
        </div>
    </div>
</div> -->


<div class="row">
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-primary text-white p-3 me-3">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-primary">{{ getTotalCount('clients') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total Clients</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.clients.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-info text-white p-3 me-3">
                    <i class="fa-solid fa-calculator"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-info">{{ getTotalCount('incometaxes') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total Income Tax</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.incometaxes.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-warning text-white p-3 me-3">
                    <i class="fa-solid fa-dollar"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-warning">{{ getTotalCount('gsts') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total GST</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.gsts.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-danger text-white p-3 me-3">
                    <i class="fa-solid fa-dollar"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-danger">{{ getTotalCount('tds') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total TDS</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.tds.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-primary text-white p-3 me-3">
                    <i class="fa-solid fa-user"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-primary">{{ getTotalCount('mcas') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total MCA</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.mcas.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-info text-white p-3 me-3">
                    <i class="fa-solid fa-shield"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-info">{{ getTotalCount('securities') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total Securities</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.securities.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-warning text-white p-3 me-3">
                    <i class="fa-solid fa-bank"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-warning">{{ getTotalCount('banks') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total Banks</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.banks.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- <div class="col-6 col-lg-3">
        <div class="card mb-4">
            <div class="card-body p-3 d-flex align-items-center">
                <div class="bg-danger text-white p-3 me-3">
                    <i class="fa-solid fa-dollar"></i>
                </div>
                <div>
                    <div class="fs-6 fw-semibold text-danger">{{ getTotalCount('tds') }}</div>
                    <div class="text-medium-emphasis text-uppercase fw-semibold small">Total TDS</div>
                </div>
            </div>
            <div class="card-footer px-3 py-2">
                <a class="btn-block text-medium-emphasis d-flex justify-content-between align-items-center" href="{{ route('backend.tds.index')}}"><span class="small fw-semibold">View More</span>
                    <i class="fa-solid fa-circle-chevron-right"></i>
                </a>
            </div>
        </div>
    </div> -->
</div>