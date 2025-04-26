<!-- Modal Delete-->
<div class="modal fade" id="modalTugasDestroy{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">
                    <i class="fas fa-exclamation-triangle mr-2"></i>
                    Hapus {{ $title }}?
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
 
            <div class="modal-body">
                <div class="alert alert-warning">
                    <i class="fas fa-exclamation-circle mr-2"></i>
                    Apakah Anda yakin ingin menghapus data ini?
                </div>

                <div class="user-info">
                    <div class="info-item">
                        <span class="label">Nama</span>
                        <span class="value">{{ $item->user->nama }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Email</span>
                        <span class="value badge badge-primary">{{ $item->user->email }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Jabatan</span>
                        <span class="value">
                            <span class="badge badge-info">{{ $item->user->jabatan }}</span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="label">Tugas</span>
                        <span class="value">{{ Str::limit($item->tugas, 50) }}</span>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-icon-split" data-dismiss="modal">
                    <span class="icon text-white-50">
                        <i class="fas fa-times"></i>
                    </span>
                    <span class="text">Tutup</span>
                </button>

                <form action="{{ route('tugasDestroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Hapus</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Show-->
<div class="modal fade" id="modalTugasShow{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $item->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title" id="exampleModalLabel{{ $item->id }}">
                    <i class="fas fa-info-circle mr-2"></i>
                    Detail {{ $title }}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="user-info">
                    <div class="info-item">
                        <span class="label">Nama</span>
                        <span class="value">{{ $item->user->nama }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Email</span>
                        <span class="value badge badge-primary">{{ $item->user->email }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Jabatan</span>
                        <span class="value">
                            <span class="badge badge-info">{{ $item->user->jabatan }}</span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="label">Tugas</span>
                        <span class="value">{{ $item->tugas }}</span>
                    </div>
                    <div class="info-item">
                        <span class="label">Tanggal Mulai</span>
                        <span class="value">
                            <span class="badge badge-info">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $item->tanggal_mulai }}
                            </span>
                        </span>
                    </div>
                    <div class="info-item">
                        <span class="label">Tanggal Selesai</span>
                        <span class="value">
                            <span class="badge badge-info">
                                <i class="fas fa-calendar-alt mr-1"></i>
                                {{ $item->tanggal_selesai }}
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .modal-content {
        border: none;
        border-radius: 12px;
        overflow: hidden;
    }

    .modal-header {
        border-bottom: none;
        padding: 1rem 1.5rem;
    }

    .modal-body {
        padding: 1.5rem;
    }

    .modal-footer {
        border-top: none;
        padding: 1rem 1.5rem;
    }

    .alert {
        border-radius: 8px;
        margin-bottom: 1.5rem;
    }

    .user-info {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .info-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-item .label {
        color: #6c757d;
        font-weight: 500;
    }

    .info-item .value {
        color: #212529;
        text-align: right;
    }

    .badge {
        padding: 0.5rem 1rem;
        font-weight: 500;
        border-radius: 6px;
    }

    .btn-icon-split {
        display: inline-flex;
        align-items: center;
        padding: 0.375rem 0.75rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .btn-icon-split:hover {
        transform: translateY(-1px);
    }

    .btn-icon-split .icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 2rem;
        height: 100%;
        margin-right: 0.5rem;
    }

    .btn-icon-split .text {
        display: inline-block;
    }
</style>
