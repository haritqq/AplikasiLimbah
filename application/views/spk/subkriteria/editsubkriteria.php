<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <?= $this->session->flashdata('pesan') ?>
                    </div>
                    <div class="card">
                        <div class="card-body">

                            <?php foreach ($subkriteria as $mb) : ?>
                                <?= form_open_multipart(); ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Kriteria</label>
                                            <input type="hidden" name="id_subkriteria" value="<?= $mb->id_subkriteria ?>">
                                            <select name="id_kriteria" class="form-control">
                                                <option value="<?= $mb->id_kriteria ?>"><?= $mb->nama_kriteria ?></option>
                                                <?php foreach ($kriteria as $tp) : ?>
                                                    <option value="<?= $tp->id_kriteria ?>"><?= $tp->nama_kriteria ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('id_kriteria', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Nama Subkriteria</label>
                                            <input type="text" name="nama_subkriteria" class="form-control" value="<?= $mb->nama_subkriteria ?>">
                                            <?= form_error('nama_subkriteria', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Faktor</label>
                                            <select name="faktor" id="faktor" class="form-control">
                                                <?php foreach ($faktor as $j) : ?>
                                                    <?php if ($j == $subkriteria['faktor']) : ?>
                                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('faktor', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <div class="form-group">
                                            <label for="">nilai</label>
                                            <select name="nilai_subkriteria" id="nilai_subkriteria" class="form-control">
                                                <?php foreach ($nilai_subkriteria as $n) : ?>
                                                    <?php if ($n == $subkriteria['nilai_subkriteria']) : ?>
                                                        <option value="<?= $n; ?>" selected><?= $n; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $n; ?>"><?= $n; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                            <?= form_error('nilai_subkriteria', '<div class="text-small text-danger">', '</div>') ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                        <a href="<?= base_url('admin/subkriteria'); ?>" class="btn btn-secondary">Kembali</a>
                                    </div>
                                </div>
                                </form>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>