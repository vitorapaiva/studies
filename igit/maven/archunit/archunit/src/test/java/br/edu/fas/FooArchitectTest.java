
package br.edu.fas;

import com.tngtech.archunit.core.domain.JavaClasses;
import com.tngtech.archunit.core.importer.ClassFileImporter;
import com.tngtech.archunit.lang.ArchRule;
import static com.tngtech.archunit.lang.syntax.ArchRuleDefinition.classes;
import org.junit.Test;

public class FooArchitectTest {
    JavaClasses importedClasses = new ClassFileImporter().importPackages("br.edu.fas");
    @Test
    public void verificarDependenciasParaCamadaPersistencia(){
        ArchRule rule = classes()
                .that().resideInAPackage("..persistence..")
                .should().onlyHaveDependentClassesThat().resideInAnyPackage("..persistente..", "..service..");

        rule.check(importedClasses);
    }
}