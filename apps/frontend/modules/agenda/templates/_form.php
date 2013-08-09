<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('agenda/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('agenda/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'agenda/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>

      <tr>
        <th><?php echo $form['programacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['programacion']->renderError() ?>
          <?php echo $form['programacion']->render() ?>
        </td>
      </tr>

      <tr>
        <th><?php echo $form['hora']->renderLabel() ?></th>
        <td>
          <?php echo $form['hora']->renderError() ?>
          <?php echo $form['hora'] ?>
        </td>
      </tr>

      <tr>
        <th><?php echo $form['ingreso']->renderLabel() ?></th>
        <td>
          <?php echo $form['ingreso']->renderError() ?>
          <?php echo $form['ingreso'] ?>
        </td>
      </tr>

      <tr>
        <th><?php echo $form['sala_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['sala_id']->renderError() ?>
          <?php echo $form['sala_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['quirofano_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['quirofano_id']->renderError() ?>
          <?php echo $form['quirofano_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['egreso']->renderLabel() ?></th>
        <td>
          <?php echo $form['egreso']->renderError() ?>
          <?php echo $form['egreso'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cie9mc']->renderLabel() ?></th>
        <td>
          <?php echo $form['cie9mc']->renderError() ?>
          <?php echo $form['cie9mc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cie9mc_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['cie9mc_id']->renderError() ?>
          <?php echo $form['cie9mc_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cx_realizada']->renderLabel() ?></th>
        <td>
          <?php echo $form['cx_realizada']->renderError() ?>
          <?php echo $form['cx_realizada'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cx_realizada_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['cx_realizada_id']->renderError() ?>
          <?php echo $form['cx_realizada_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_cx']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_cx']->renderError() ?>
          <?php echo $form['tipo_cx'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['diagnostico']->renderLabel() ?></th>
        <td>
          <?php echo $form['diagnostico']->renderError() ?>
          <?php echo $form['diagnostico'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['diagnostico_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['diagnostico_id']->renderError() ?>
          <?php echo $form['diagnostico_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['paciente_name']->renderLabel() ?></th>
        <td>
          <?php echo $form['paciente_name']->renderError() ?>
          <?php echo $form['paciente_name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['paciente_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['paciente_id']->renderError() ?>
          <?php echo $form['paciente_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['edad']->renderLabel() ?></th>
        <td>
          <?php echo $form['edad']->renderError() ?>
          <?php echo $form['edad'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['genero']->renderLabel() ?></th>
        <td>
          <?php echo $form['genero']->renderError() ?>
          <?php echo $form['genero'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['genero_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['genero_id']->renderError() ?>
          <?php echo $form['genero_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['registro']->renderLabel() ?></th>
        <td>
          <?php echo $form['registro']->renderError() ?>
          <?php echo $form['registro'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['servicio']->renderLabel() ?></th>
        <td>
          <?php echo $form['servicio']->renderError() ?>
          <?php echo $form['servicio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['anestesia_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['anestesia_id']->renderError() ?>
          <?php echo $form['anestesia_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['anestesia_empleada']->renderLabel() ?></th>
        <td>
          <?php echo $form['anestesia_empleada']->renderError() ?>
          <?php echo $form['anestesia_empleada'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ev_adversos_anestesia']->renderLabel() ?></th>
        <td>
          <?php echo $form['ev_adversos_anestesia']->renderError() ?>
          <?php echo $form['ev_adversos_anestesia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['observaciones']->renderLabel() ?></th>
        <td>
          <?php echo $form['observaciones']->renderError() ?>
          <?php echo $form['observaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['requerimiento']->renderLabel() ?></th>
        <td>
          <?php echo $form['requerimiento']->renderError() ?>
          <?php echo $form['requerimiento'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['req_insumos']->renderLabel() ?></th>
        <td>
          <?php echo $form['req_insumos']->renderError() ?>
          <?php echo $form['req_insumos'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['req_hemoderiv']->renderLabel() ?></th>
        <td>
          <?php echo $form['req_hemoderiv']->renderError() ?>
          <?php echo $form['req_hemoderiv'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['req_laboratorio']->renderLabel() ?></th>
        <td>
          <?php echo $form['req_laboratorio']->renderError() ?>
          <?php echo $form['req_laboratorio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['req_anestesico']->renderLabel() ?></th>
        <td>
          <?php echo $form['req_anestesico']->renderError() ?>
          <?php echo $form['req_anestesico'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['status']->renderLabel() ?></th>
        <td>
          <?php echo $form['status']->renderError() ?>
          <?php echo $form['status'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['causa_diferido_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['causa_diferido_id']->renderError() ?>
          <?php echo $form['causa_diferido_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['solicitado']->renderLabel() ?></th>
        <td>
          <?php echo $form['solicitado']->renderError() ?>
          <?php echo $form['solicitado'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['riesgoqx_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['riesgoqx_id']->renderError() ?>
          <?php echo $form['riesgoqx_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['contaminacionqx_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['contaminacionqx_id']->renderError() ?>
          <?php echo $form['contaminacionqx_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['eventoqx_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['eventoqx_id']->renderError() ?>
          <?php echo $form['eventoqx_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['complicaciones']->renderLabel() ?></th>
        <td>
          <?php echo $form['complicaciones']->renderError() ?>
          <?php echo $form['complicaciones'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['val_pre_anestesica']->renderLabel() ?></th>
        <td>
          <?php echo $form['val_pre_anestesica']->renderError() ?>
          <?php echo $form['val_pre_anestesica'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['reintervencion']->renderLabel() ?></th>
        <td>
          <?php echo $form['reintervencion']->renderError() ?>
          <?php echo $form['reintervencion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['permisos']->renderLabel() ?></th>
        <td>
          <?php echo $form['permisos']->renderError() ?>
          <?php echo $form['permisos'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_proc_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_proc_id']->renderError() ?>
          <?php echo $form['tipo_proc_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['atencion_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['atencion_id']->renderError() ?>
          <?php echo $form['atencion_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tiempo_fuera']->renderLabel() ?></th>
        <td>
          <?php echo $form['tiempo_fuera']->renderError() ?>
          <?php echo $form['tiempo_fuera'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['procedencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['procedencia']->renderError() ?>
          <?php echo $form['procedencia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['clasificacionqx']->renderLabel() ?></th>
        <td>
          <?php echo $form['clasificacionqx']->renderError() ?>
          <?php echo $form['clasificacionqx'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['region_px']->renderLabel() ?></th>
        <td>
          <?php echo $form['region_px']->renderError() ?>
          <?php echo $form['region_px'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['extension_px']->renderLabel() ?></th>
        <td>
          <?php echo $form['extension_px']->renderError() ?>
          <?php echo $form['extension_px'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['anexo_detalle']->renderLabel() ?></th>
        <td>
          <?php echo $form['anexo_detalle']->renderError() ?>
          <?php echo $form['anexo_detalle'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['destino_px']->renderLabel() ?></th>
        <td>
          <?php echo $form['destino_px']->renderError() ?>
          <?php echo $form['destino_px'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['liberacion_sala']->renderLabel() ?></th>
        <td>
          <?php echo $form['liberacion_sala']->renderError() ?>
          <?php echo $form['liberacion_sala'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tiempo_est']->renderLabel() ?></th>
        <td>
          <?php echo $form['tiempo_est']->renderError() ?>
          <?php echo $form['tiempo_est'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['riesgo_qx_pre']->renderLabel() ?></th>
        <td>
          <?php echo $form['riesgo_qx_pre']->renderError() ?>
          <?php echo $form['riesgo_qx_pre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['show_in_index']->renderLabel() ?></th>
        <td>
          <?php echo $form['show_in_index']->renderError() ?>
          <?php echo $form['show_in_index'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['protocolo']->renderLabel() ?></th>
        <td>
          <?php echo $form['protocolo']->renderError() ?>
          <?php echo $form['protocolo'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cancelada']->renderLabel() ?></th>
        <td>
          <?php echo $form['cancelada']->renderError() ?>
          <?php echo $form['cancelada'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
